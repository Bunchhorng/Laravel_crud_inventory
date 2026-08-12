<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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
        return redirect()->route('product.index')->with('message', 'Product created successfully!');
    }

    public function edit(Product $product)
    {
        $categories = Category::all();

        return view('product.edit', compact('product', 'categories'));
    }

    public function update(Request $request, Product $product){
        $validated = $request->validate([
            'name'=> "required|string|max:100",
            'stock'=> "required|integer|max:9999",
            'price'=> "required|decimal:0.00,9999.99",
            'category_id'=>"required",
            'image' => 'nullable|image|mimes:jpg,jpeg,png,webp|max:2048'
        ]);

        if ($request->hasFile('image')) {

            // Delete old image
            if ($product->image && Storage::disk('public')->exists($product->image)) {
                Storage::disk('public')->delete($product->image);
            }

            // Store new image
            $validated['image'] = $request->file('image')->store('products', 'public');
        }

        $product->update($validated);
        return redirect()->route('product.index')->with('message', 'Product updated successfully!');
    }

    public function destroy(Product $product){
        $product->delete();
        return redirect()->route('product.index')->with('message', 'Product deleted successfully!');
    }
}
