<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Products;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function suggest()
    {
        $banner = Banner::all();
        return view('index', ['banner' => $banner]);
       // $suggests = Products::where('suggestion' , '=' , 1)->get();
        //return view('index' , ['suggests' => $suggests]);
       // return view('index', ['suggests' => $suggests]);
       // view::share('suggests', $suggests);
      //return dd($suggestion);

    }


    public function rating()
    {
        $banner = Banner::all();
        $rating = Products::where('rating' , '=' , '5')->get();
        return view('index' , ['rating' => $rating] , ['banner' => $banner]);

    }


    public function search(Request $request){
//        return dd($request);
        $search = $request->input('search');
        $searchProduct = Products::where('title' , 'like' , '%' . "$search" . "%")->orwhere('author' , 'like' , '%' . "$search" . "%")->get();
        $products= Products::all();
        return view('search-result' , ['searchProduct' => $searchProduct, 'products' => $products ]);
    }



}
