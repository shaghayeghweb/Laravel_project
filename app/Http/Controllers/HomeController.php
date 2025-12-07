<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\StaticPages;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{

//    public function __construct()
//    {
//        $this->middleware('auth');
//    }
//    public function index(){
//        return view('index');
//    }

    public function profile()
    {
        $user = Auth::user();
        return view('home', ['user' => $user]);
    }

    public function index()
    {
        // return $articles;
        $banner = Banner::all();
        return view('index', ['banner' => $banner, 'suggests' => [], 'rating' => []]);
    }

    public function about()
    {
        $staticPages = StaticPages::where('slug', \request()->path())->first();
        if (isset($staticPages->id)) return view('about', ['staticPages' => $staticPages]);
    }

}
