<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;

class CartController extends Controller
{

//    public function add_to_cart(Request $request, $slug)
//    {
//        $product = Products::where('slug', $slug)->first();
//        $quantity = max(1, (int)$request->input('quantity', 1));
//
//        $cart = session()->get('cart', []);
//
//        if (isset($cart[$slug])) {
//            $cart[$slug]['quantity'] += $quantity;
//        } else {
//            $cart[$slug] = [
//                "title" => $product->title,
//                "author" => $product->author,
//                "price" => $product->price,
//                "oldPrice" => $product->oldPrice,
//                "img_thumbnail" => $product->img_thumbnail,
//                "quantity" => $quantity
//            ];
//        }
//
//        session()->put('cart', $cart);
//
//        return redirect()->route('add_to_cart')->with('success', 'محصول با موفقیت به سبد خرید اضافه شد.');
//    }


    public function add_to_cart(Request $request, $slug)
    {
        // پیدا کردن محصول
        $product = Products::where('slug', $slug)->firstOrFail();

        // تعداد درخواست شده (حداقل 1)
        $quantity = max(1, (int) $request->input('quantity', 1));

        // گرفتن سبد خرید از سشن
        $cart = session()->get('cart', []);

        // اگر محصول قبلاً در سبد بود، فقط تعداد رو افزایش بده
        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += $quantity;
        } else {
            // محصول جدید اضافه می‌کنیم
            $cart[$product->id] = [
                'id' => $product->id,
                'slug' => $product->slug,
                'title' => $product->title,
                'price' => $product->price,
                'oldPrice' => $product->oldPrice ?? null,
                'img_thumbnail' => $product->img_thumbnail,
                'quantity' => $quantity,
            ];
        }

        // ذخیره در سشن
        session()->put('cart', $cart);

        // فیدبک به کاربر
        return redirect()->route('show_cart' ,['slug' => $product->slug])->with('success', 'محصول با موفقیت به سبد خرید اضافه شد.');
    }




    public function show_cart()
    {
        $cart = session()->get('cart' , []);
        return view('cart', ['cart' => $cart]);

    }
}
