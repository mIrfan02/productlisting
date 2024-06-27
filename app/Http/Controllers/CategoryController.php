<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class CategoryController extends Controller
{
    public function create()
    {
        return view('CategoryForm');
    }

    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            // Store the file in the specified directory within the public folder
            $file->move(public_path('uploads/categories'), $filename);
            // Construct the full image path
            $imagePath = 'uploads/categories/' . $filename;
            // Update the image path in the data
            $data['image'] = $imagePath;
        } else {
            // If no image is provided, set image field to an empty string
            $data['image'] = '';
        }

        Category::create($data);

        return redirect()->route('categorypage')->with('success', 'Category created successfully.');
    }

    public function index()
    {
        $categories = Category::all();
        $categoryCount = $categories->count();

        return view('Category', compact('categories', 'categoryCount'));
        // return view('Category', ['categories' => $categories]);
    }

    public function edit(Category $category)
    {
        return view('AdminDashboard.EditCategory', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $validatedData = $request->validate([
            'title' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();

            $file->move(public_path('uploads/categories'), $filename);

            if ($category->image && file_exists(public_path($category->image))) {
                unlink(public_path($category->image));
            } else {
                // Handle the case when the file does not exist
                Log::warning('File does not exist: ' . $category->image);
            }


            $validatedData['image'] = 'uploads/categories/' . $filename;
        }

        $category->update($validatedData);

        return redirect()->route('categorypage')->with('success', 'Category updated successfully.');
    }


    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('categorypage')->with('success', 'Category deleted successfully.');
    }
    public function toggleStatus(Category $category)
    {
        $category->status = !$category->status;
        $category->save();

        return response()->json(['success' => true]);
    }
}
