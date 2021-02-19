<?php

namespace App\Http\Controllers;

use App\Comment;
use App\images;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth ;

class CommentController extends BaseController

{
 
    
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

  
    public function getDelete($id,$idProduct) {
        $comment = Comment::find($id) ;
        $comment->delete() ;

        return redirect('admin/product/showEditPage/'.$idProduct)->with('thongbao','Xóa comment thành công') ;
    }

    public function postComment($id,Request $request) 
    {
        $idProduct = $id ;
        $product = Product::find($id) ;
        $comment = new Comment ;
        $comment->idProduct = $idProduct ;
        $comment->idUser = Auth::user()->id ;
        $comment->created_at = Carbon::now('Asia/Ho_Chi_Minh') ;
        $comment->timestamps = false; 
        $comment->star = $request->star ;
        $comment->content = $request->content;
        $comment->save();


        return redirect('viewDetail/'.$idProduct)->with('thongbao','Bình luận thành công') ;
    }

    
}
