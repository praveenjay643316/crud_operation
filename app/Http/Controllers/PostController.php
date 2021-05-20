<?php

namespace App\Http\Controllers;
use App\Models\Post;
use Illuminate\Http\Request;
use DB;
class PostController extends Controller
{
    public function addPost(){
        return view('add-post');
    }

    public function savePost(Request $request){
        $request->validate([
            'name'=>'required',
            'description'=>'required'
        ]);
        DB::table('posts')->insert([
            'name'=>$request->name,
            'description'=>$request->description]);
        return back()->with('post_add','Details Added Successfully');
    }

    public function postList(){
        //$post=Post::paginate(5);
        //return view('post-list',['posts'=>$post]);
        $posts = DB::table('posts')->paginate(5);
        return view('post-list', compact('posts'));
    }

    public function editList($id){
        $post = DB::table('posts')->where('id',$id)->first();
        return view('edit-list', compact('post'));
    }

    public function updateList(Request $request){
        DB::table('posts')->where('id',$request->id)->update([
            'name'=>$request->name,
            'description'=>$request->description]);
        return back()->with('update_add','Details Updated Successfully');
    }

    public function deleteList($id){
        DB::table('posts')->where('id',$id)->delete();
        return back()->with('delete_add','post deleted successfully');
    }

}
