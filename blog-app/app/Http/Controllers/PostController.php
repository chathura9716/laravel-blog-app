<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function store(Request $request) {

        $validator = Validator::make($request ->all(), [
            'title' => 'required',
            'description' => 'required',
            'thumbnail' =>'required|image'

        ]);
        if($validator->fails()){
            return back()->with('status','Something is wrong!');
        }else{

        $imageName = time() . ".".$request ->thumbnail->extension();
//save image in public folder
        $request->thumbnail->move(public_path('thumbnails'),$imageName );
        
        post::create([
            'user_id'=>auth()->user()->id,
            'title' => $request->title,
            'description'=>$request->description,
            'thumbnail' =>$imageName


        ]);
    }
        return  redirect(route('posts.all'))->with('status','Post created successfully!');
    
    }

    public function show($postId){

        $post = Post::findOrFail($postId);
        return view('posts.show',compact('post'));
    }

    public function edit($postId){
        $post = Post::findOrFail($postId);
        return view('posts.edit',compact('post'));
    } 

    public function update($postId,Request $request){
        //dd($request ->all());
        Post::findOrFail($postId)->update($request ->all());
        return redirect(route('posts.all'))->with('status','Post updated!');
    }

    public function delete($postId){
        Post::FindOrFail($postId)->delete();
        return redirect(route('posts.all'));
    }
}
