<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MainController extends Controller
{
//    public function index(){
//        return view('index');
//    }


    public function profile()
    {
        $user = Auth::user();
        return view('profile', ['user' => $user]);
    }

    public function productList()
    {
        return view('product-list');
    }


    public function categoryList()
    {
        $category = Category::all();
        return view('add-category', ['category' => $category]);
    }

    public function addCategory(Request $request){
        $request->validate([
            'title' => 'required|min:4',
            'slug' => 'required',
        ]);

        Category::create([
            'title' => $request->title,
            'slug' => $request->slug,
        ]);

        return back()->with('catSuccess', 'دسته بندی با موفقیت اضافه شد.');

    }

    public function deleteCategory($slug){
        Category::where('slug', $slug)->delete();
        return back()->with('catDeleteSuccess', 'دسته بندی پاک شدو');
    }

    public function updateCategoryPage($slug){
        $category = Category::where('slug', $slug)->first();
        $categories = Category::all();
        return view('update-category', ['category' => $category, 'categories' => $categories]);
    }

    public function updateCategory(Request $request, $slug)
    {
        $categoryUpdate = Category::where('slug', $slug)->first();

        if (!$categoryUpdate) {
            return redirect()->back()->withErrors(['message' => 'دسته بندی پیدا نشد']);
        }

        $request->validate([
            'title' => 'required|min:4',
            'slug' => 'required|unique:category,slug,' . $categoryUpdate->id,
        ]);

        $categoryUpdate->slug = $request->slug;
        $categoryUpdate->title = $request->title;

        $categoryUpdate->save();

        return redirect()->route('categoryList', ['slug' => $categoryUpdate->slug])
            ->with('catUpdateSuccess', 'دسته بندی ویرایش شد');
    }


    public function enableCategory($slug){
        $categoryStatus = Category::where('slug', $slug)->first();
        $categoryStatus->status = 1;
        $categoryStatus->save();
        return back();
    }

    public function disableCategory($slug){
        $categoryStatus = Category::where('slug' , $slug)->first();
        $categoryStatus->status = 0;
        $categoryStatus->save();
        return back();
    }

}
