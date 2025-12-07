<?php

namespace App\Providers;

use App\Models\Author;
use App\Models\Category;
use App\Models\Products;
use App\Models\Banner;
use App\Models\Setting;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }


    public function boot()
    {
       $setting = Setting::first();
       $footer_icon = json_decode($setting["footer_icon"], true);
       $header_icon = json_decode($setting["header_icon"], true);
       $logo = $setting["logo"];
       $footer_items = json_decode($setting["footer_items"], true);
        view::share('_setting', $setting);
        view::share('_footer_icon', $footer_icon);
        view::share('_header_icon', $header_icon);
        view::share('_logo',$logo);
        view::share('_footer_items', $footer_items);
        //view::share('_product', $product);

        $banner = Banner::first();
        view::share('_banner', $banner);


        $product = Products::orderBy('created_at' , 'desc' )->limit(6)->get();
        view::share('_product', $product);
//        $product_img =$product['img_thumbnail'];
//        view::share('_product_img', $product_img);

        $products_discount = Products::where('discount' , '>=' , '35')->limit(4)->get();
        view::share('_products_discount', $products_discount);
//        $suggestion = Products::where('suggestion' , '=' , '1')->get();

        $suggests = Products::where('suggestion' , '=' , 1)->get();
            view::share('_suggests', $suggests);



        $category =  Category::with('products')->where('status' , 1)->get();
        view::share('category', $category);

        $favAuthors = Author::where('rating', '=', 5)->limit(4)->get();
        view::share('_favAuthors', $favAuthors);

        $author = Author::inRandomOrder()->first();
        view::share('_author', $author);

        $loginedUser = auth::user();
        View::share('_loginedUser', $loginedUser);



    }
}
