<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate(10);
        return view("product.index", compact('products'));
    }   

    public function create(Category $category){
        $categories = Category::all();
        return view('product.create', compact('categories'));
    }

    public function store(Request $request, Category $category){
        $validated = $request->validate([
            'name'=> "required|string|max:100",
            'stock'=> "required|integer|max:9999",
            'price'=> "required|decimal:0.00,9999.99",
            'category_id'=>"required",
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('products', 'public');
        }
        

        Product::create($validated);
        return redirect()->route('product.index');
    }
}
