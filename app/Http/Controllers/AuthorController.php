<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Category;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function author_single($slug){
    $author_single = Author::where('slug',$slug)->first();
    return view('author-single',['author_single'=>$author_single]);
    }

    public function authors(){
        $authors = Author::all();
        return view('author' , ['authors'=>$authors]);
    }
}
