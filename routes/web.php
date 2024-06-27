<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomQuoteController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MaterialController;
use App\Http\Controllers\PrintingController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/aboutus', function () {
    return view('AboutUs');
})->name('about');
Route::get('/about', function () {
    return view('AboutUs');
})->name('aboutus');
Route::get('/category123', function () {
    return view('categorypage');
})->name('productcateg');
Route::get('/contact-us', function () {
    return view('contactUs');
})->name('contactus');
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/RequestQuate', function () {
    return view('RequestQuate');
})->name('reqquote');
Route::get('/searchlist', function () {
    return view('SEARCHLIST');
});
Route::get('/service/{id}', function ($id) {
    // Try to find the category
    $category = App\Models\Category::find($id);

    // If the category is not found, try to find the product
    if (!$category) {
        $product = App\Models\Product::find($id);
    } else {
        $product = null;
    }

    return view('service', ['category' => $category, 'product' => $product]);
})->name('service');


Route::get('/shop', function () {
    return view('Shop');
});
// Route::get('/login', function () {
//     return view('Login');
// });
Route::get('/', function () {
    return view('index');
})->name('home');
Route::get('/BoxIndustry', function () {
    return view('BoxByIndustry');
})->name('boxbyindustry');
Route::get('/BoxMaterial', function () {
    return view('BoxByMaterial');
})->name('boxbymaterial');
Route::get('/BoxStyle', function () {
    return view('BoxByStyle');
})->name('boxbystyle');
//frontpage Home
// Route::get('/', [HomeController::class, 'frontpage'])->name('home');

//store
Route::post('/store', [AdminLoginController::class, 'AuthAdmin'])->name('adminrecord');

// -----------Admin new dashboard//--------------
Route::get('/home', function () {
    return view('AdminDashboard.adminhome');
})->name('dashboard');

Route::get('/category', function () {
    return view('AdminDashboard.Category');
})->name('categorypage');
Route::get('/categ_form', function () {
    return view('AdminDashboard.CategoryForm');
})->name('formcategory');
////Printing Routes//////////
Route::get('/printing', function () {
    return view('AdminDashboard.Printing');
})->name('printingpage');
Route::get('prints', function () {
    return view('AdminDashboard.Printingform');
})->name('printform');
////Material-Routes/////////
// Route::get('/material', function () {
//     return view('AdminDashboard.Material');
// })->name('materiall');
Route::get('material', function () {
    return view('AdminDashboard.Materialform');
})->name('materialform');
Route::get('quote', [CustomQuoteController::class, 'create'])->name('quote');
Route::post('quote', [CustomQuoteController::class, 'store'])->name('quote.store');


// ------------------Auth routes----------------
Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
// ----------------------CategoryController-----
Route::get('/categoryindex', [CategoryController::class, 'index'])->name('categories_index');
Route::post('/categorystore', [CategoryController::class, 'store'])->name('categories_store');
Route::get('/categorycreate', [CategoryController::class, 'create'])->name('categories_create');
Route::get('/category/{category}/edit', [CategoryController::class, 'edit'])->name('category.edit');
Route::put('/category/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::delete('/category/{category}', [CategoryController::class, 'destroy'])->name('category.destroy');

//Product Controller
Route::get('/createProduct', [ProductController::class, 'AddProduct'])->name('productform');
Route::post('/admin/product', [ProductController::class, 'storeProduct'])->name('admin.product');
//All Product
Route::get('/all/product', [ProductController::class, 'allproduct'])->name('all.products');
//Delete Product
Route::delete('/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
//Edit Product
Route::get('/products/edit/{id}', [ProductController::class, 'edit'])->name('products.edit');
//Update Product

Route::post('/products/update/{id}', [ProductController::class, 'update'])->name('products.update');

Route::post('/category/{category}/toggle', [CategoryController::class, 'toggleStatus'])->name('category.toggleStatus');
/////Printing-Controller-Routes/////////
Route::get('/printscreate', [PrintingController::class, 'create'])->name('prints_create');
Route::post('/printsstore', [PrintingController::class, 'store'])->name('prints_store');
Route::get('/printsindex', [PrintingController::class, 'index'])->name('prints_index');
Route::get('editprints/{id}', [PrintingController::class, 'edit'])->name('editprintform');
Route::put('editprints/{id}', [PrintingController::class, 'update'])->name('updated');
Route::delete('printd/{id}', [PrintingController::class, 'destroy'])->name('destroy');
/////Material-Controller-Routes/////////
Route::get('/materialcreate', [MaterialController::class, 'create'])->name('material_create');
Route::post('/materialstore', [MaterialController::class, 'store'])->name('material_store');
Route::get('/materialindex', [MaterialController::class, 'index'])->name('material_index');
Route::get('editmaterial/{id}', [MaterialController::class, 'edit'])->name('editmaterialform');
Route::put('editmaterial/{id}', [MaterialController::class, 'update'])->name('update');
Route::delete('material/{id}', [MaterialController::class, 'destroy'])->name('delete');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');

// Route::get('/search', [ProductController::class, 'search'])->name('product.search');
// Route::get('/search', [ProductController::class, 'search'])->name('product.search');
Route::get('/search', [ProductController::class, 'search']);
