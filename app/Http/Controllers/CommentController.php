<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Comment;
use App\Gpu;
use DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Html\FormFacade;

class CommentController extends Controller
{
   public function commentsWithGpu($id)
   {
       $gpu_id = $id;
       $comments = Comment::where('gpu_id', $id)
           ->orderBy('created_at', 'desc')
           ->get();
       $firstGpu = Gpu::where('id', $id)
           ->first();
       $counter = DB::table('comments')->where('gpu_id', $id)->count();
       return view('comment', array('comments' => $comments, 'gpu_id' => $gpu_id, 'firstGpu' => $firstGpu, 'counter' => $counter));
   }

   public function postCreateComment(Request $request){
       $this->validate($request, [
            'body' => 'required|max: 1000'

       ]);
       $comment = new Comment();
       $comment->body = $request['body'];
       $comment->gpu_id = $request['gpu_id'];
       $message = "There was an error";
       if($request->user()->comments()->save($comment)){
           $message = 'Successfully added comment';
       }


       // must implement error messages
       return back()->with(['message' => $message]);
   }

   public function getCommentDelete($commentId){
       $comment = Comment::where('id', $commentId)->first();
       if(Auth::user() != $comment->user){
           return back();
       }
       $comment->delete();
       return back()->with(['message' => 'Successfully deleted the comment']);
   }
}
