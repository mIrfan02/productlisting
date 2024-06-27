<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Facades\Log;

class ProductController extends Controller
{
    public function AddProduct()
    {
        $categories = Category::all();
        return view('AdminDashboard.NewProduct', compact('categories'));
    }
    //Store Product
    public function storeProduct(Request $request)
    {
        $imageName = '';

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/Products'), $imageName);
        }

        $product = new Product();

        if ($request->input('printByDropdown')) {
            $product->checkbox = $request->input('printByDropdown');
        } else {
            $product->checkbox = null;
        }

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->image = $imageName;
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        $product->save();

        return redirect()->route('all.products')->with('success', 'Product added successfully!');
    }

    //All product
    public function allproduct()
    {

        $products = Product::with('category')->get();
        $productCount = $products->count();
        return view('AdminDashboard.AllProduct', compact('products', 'productCount'));
    }
    //Delete Product
    public function destroy($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }
        $product->delete();
        return redirect()->back()->with('success', 'product deleted successfully.');
    }
    //EditProducts
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('AdminDashboard.EditProduct', compact('product', 'categories'));
    }

    //Update Product
    public function update($id, Request $request)
    {
        $imageName = '';

        $product = Product::findOrFail($id);

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '_' . $image->getClientOriginalName();
            $image->move(public_path('uploads/Products'), $imageName);

            if ($product->image) {
                // Delete previous image if exists
                if ($product->image && file_exists(public_path('uploads/Products/' . $product->image))) {
                    unlink(public_path('uploads/Products/' . $product->image));
                } else {
                    // Handle the case when the file does not exist
                    Log::warning('File does not exist: ' . $product->image);
                }

                // Update the image property
                $product->image = $imageName;
            }
        }

        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category_id');
        $product->checkbox = $request->input('printByDropdown') ?: null;

        $product->save();

        return redirect()->route('all.products')->with('success', 'Product updated successfully!');
    }



    // public function search(Request $request)
    // {
    //     $query = $request->input('query');
    //     $products = Product::where('name', 'like', '%' . $query . '%')->get();
    //     return response()->json(['data' => $products]);
    // }



    public function search(Request $request)
    {
        $query = $request->input('query');
        $products = Product::where('name', 'like', '%' . $query . '%')->get();

        // Include image path in the response
        $products = $products->map(function ($product) {
            return [
                'id' => $product->id,
                'name' => $product->name,
                'description' => $product->description,
                'image' => asset('uploads/Products/' . $product->image), // Assuming image path is stored in 'uploads/Products/'
                'price' => $product->price,
                'category_id' => $product->category_id,
            ];
        });

        return response()->json(['data' => $products]);
    }
}
