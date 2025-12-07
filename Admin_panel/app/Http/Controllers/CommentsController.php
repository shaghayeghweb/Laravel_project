<?php

namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Product;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function showComments()
    {
//        $product = Product::->get;
        $product =  Product::pluck('title');
        $comments = Comments::all();
        return view('comment-list' , ['comments' => $comments , 'product' => $product]);
    }

    public function publishComment($id){
        $commentPublish = Comments::findOrFail($id);
        $commentPublish->status = 1;
        $commentPublish->save();
//        return redirect()->back()->with(['commentPublish' => true, 'comment_message' => 'کامنت تأیید شد!']);
        return back()->with('success', 'نظر منتشر شد');
    }

    public function deleteComment($id)
    {
        Comments::where('id', $id)->delete();
            return back()->with('successDelete' , 'نظر حذف گردید');
    }

}
