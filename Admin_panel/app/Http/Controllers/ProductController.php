<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function productList()
    {
        $productList = Product::all();
        return view('product-list', ['productList' => $productList]);
    }

    public function addProductPage()
    {
        $categoryList = Category::all();
        return view('add-product', ['categoryList' => $categoryList]);
    }


    public function addProduct(Request $request)
    {
        $request->validate([
            'title' => 'required|string|min:3',
            'slug' => 'required|string',
            'category_id' => 'required',
            'price' => 'required|numeric',
            'quantity' => 'required|numeric',
            'discount' => 'required|numeric',
            'language' => 'required|string',
            'img_thumbnail' => 'image|mimes:jpg,jpeg,png,webp|max:2048',
            'body'=>'nullable'
        ]);


        $imgThumbnail_path = null;
        if ($request->hasFile('img_thumbnail')) {
            $imgThumbnail_path = $request->file('img_thumbnail')->store('products', 'public');
        }

        Product::create([
            'title' => $request->title,
            'slug' => trim($request->slug),
            'category_id' => $request->category_id,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'discount' => $request->discount,
            'language' => $request->language,
            'img_thumbnail' => $imgThumbnail_path,
        ]);
//        dd($request->all());


        return redirect()->route('productList')->with('success', 'محصول با موفقیت ثبت شد.');
    }


    public function deleteProduct($slug)
    {
        Product::where('slug', $slug)->delete();
        return back()->with('successDelete', 'محصول حذف گردید');
    }

    public function updatePage($slug)
    {
        $updateProduct = Product::where('slug', $slug)->first();
        $categoryList = Category::all();
        return view('update-product', ['updateProduct' => $updateProduct, 'categoryList' => $categoryList]);
    }


    public function updateProduct(Request $request, $slug)
    {

        $product = Product::where('slug', $slug)->first();
        $request->validate([
            'title' => 'required|string|max:255',
            'category_id' => 'required',
            'slug' => 'required|string|max:255|unique:products,slug,' . $product->id,
            'price' => 'required|numeric|min:0',
            'quantity' => 'required|integer|min:0',
            'discount' => 'nullable|integer|min:0',
            'language' => 'nullable|string|max:255',
            'img_thumbnail' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
        ]);

        $product->title = $request->title;
        $product->category_id = $request->category_id;
        $product->slug = $request->slug;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->discount = $request->discount;
        $product->language = $request->language;
        $product->img_thumbnail = $request->img_thumbnail;

        if ($request->hasFile('img_thumbnail')) {

            $imgThumbnail_path = $request->file('img_thumbnail')->store('products', 'public');
            $product->img_thumbnail = $imgThumbnail_path;
        }

        $product->save();



//        return view('product-list')->with('updateSuccess' , 'محصول با موفقیت بروزرسانی شد.');
        return redirect()->route('productList')->with('updateSuccess', 'محصول با موفقیت بروزرسانی شد.');

    }


}
