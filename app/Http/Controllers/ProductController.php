<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Comment;
use App\Models\Products;
use App\Models\User;
use Carbon\Carbon;
use Faker\Factory;
use Illuminate\Support\Facades\Auth;
use Mmo\Faker\PicsumProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    public function shop_page()
    {
        $products = Products::all();
        $filterCategory = $products->pluck('category_id')->unique('id');
        return view('shop', ['products' => $products, 'filterCategory' => $filterCategory]);
    }

    public function product_single($slug)
    {
        $product1 = Products::with('category')->where('slug', $slug)->first();
       $relatedProduct = Products::where('category_id' , $product1->category_id)->where('slug','!=',$product1->slug)->limit(6)->get();

        $product = Products::where('slug', $slug)->first();

        $comment = Comment::where('product_id', $product->id)->where('status', 1)->get();

        $user = User::all();
        return view('product-single', ['product' => $product, 'comments' => $comment, 'user' => $user , 'relatedProduct' => $relatedProduct]);
    }

    public function category($slug)
    {
        if (isset($slug)) {
            $category = Category::where('slug', $slug)->get();
            return view('index', ['category' => $category]);
        }
    }


    public function author($slug)
    {
        $category = Category::where('slug', $slug)->get();
        // return dd($category->Authors);
        return view('index', ['category' => $category]);
    }


    public function add_to_favorite($id)
    {
        $product = Products::findOrFail($id);
        $favorite = session()->get('favoriteItems', []);
        if (!array_key_exists($product->id, $favorite)) {
            $favorite[$product->id] = [
                'id' => $product->id,
                'title' => $product->title,
                'slug' => $product->slug,
                'img_thumbnail' => $product->img_thumbnail ?? 'hi', // اگر عکس نداشت یک عکس پیش‌فرض قرار می‌ده
                'author' => $product->author,
                'price' => $product->price,
                'oldPrice' => $product->oldPrice,
            ];
        }
        session()->put('favoriteItems', $favorite);
        session()->get('favoriteItems');
        return redirect()->route('show-favorite-list')->with('success', 'محصول به علاقه‌مندی‌ها اضافه شد.');
    }


    public function show_favorite_list()
    {
        $favoriteItems = session()->get('favoriteItems',[]);
        $user = Auth::user();
        return view('my-wishlist', ['favoriteItems' => $favoriteItems , 'user' => $user]);


    }

    public function commentPublish(Request $request, $slug)
    {
        $request->validate([
            'text' => 'required|min:2',
            'email' => Auth::check() ? 'nullable|email' : 'required|email',
        ]);

        $product = Products::where('slug', $slug)->firstOrFail();

        Comment::create([
            'user_id' => Auth::id() ?? 0,
            'product_id' => $product->id,
            'text' => $request->text,
            'name' => Auth::check() ? Auth::user()->name : 'مهمان',
            'email' => Auth::check() ? Auth::user()->email : $request->email,
            'status' => 0,
            'date' => Carbon::now()
        ]);

        return back()->with('waitToAccept', 'نظر شما در انتظار تایید است.');
    }



}







