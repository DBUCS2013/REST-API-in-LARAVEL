<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
 function addPostAPI(Request $req)   
 {
        $post = new Post();
        $post->title = $req->title;
        $post->body = $req->body;
        $post->save();//
        return "Post successfull";
 }
 function getPosts()
 {
     $posts = new Post();
     return $posts->get();
 }
    
 function getPostById($id)
 {
    $posts = Post::where('id',$id)->first();
    return $posts->first();
 }
 function updatePost(Request $request)
 {
    $post =  Post:: find($request->id);
    $post->title= $request->title;
    $post->body = $request->body;
    $post->save();
    return "Post Updated successfully";
 }

 function deletePost($id)
 {
     Post::where('id',$id)->delete();
     return "Deleted";
 }
}
