<?php

namespace App\Http\Controllers\Users;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\user\Post;
use App\Model\user\Likes;
use Illuminate\Support\Facades\Auth;


class PostController extends Controller
{
     public function post(Post $post)
   {

   		return view('user.post')->with('posts',$post);
   }

   public function getAllPosts()
   {
   		return $posts = Post::with('likes')->where('status',1)->orderBy('created_at','DESC')->paginate(4);
   }

   public function savelike(Request $request)
   {

   		$likeCount = Likes::where(['user_id' => Auth::id(),'post_id' => $request->id])->first();
   		if($likeCount){
   			Likes::where(['user_id' => Auth::id(),'post_id' => $request->id])->delete();
   			return "delete";
   		}else{

	   		$like = new Likes();
	   		$like->user_id = Auth::id();
	   		$like->post_id = $request->id;
	   		$like->save();
   		}
    }
}
