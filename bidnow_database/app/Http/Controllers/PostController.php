<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Post::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newPost = new Post();
        $newPost->title = $request->title;
        $newPost->author_id = $request->author_id;
        $newPost->category_id = $request->category_id;
        $newPost->content = $request->content;
        $newPost->excerpt=$request->excerpt;
        $newPost->status= $request->status;
        $newPost->images=$request->images;
        $newPost->publish_date = $request->publish;
        $newPost->expired_date = $request->expired_data;
        $newPost->created_by=$request->created_by;
        $newPost->updated_by=$request->updated_by;
        $newPost->save();
        return response()->json($newPost);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $newPost = Post::findOrFail($id);
        $newPost->title = $request->title;
        $newPost->author_id = $request->author_id;
        $newPost->category_id = $request->category_id;
        $newPost->content = $request->content;
        $newPost->excerpt=$request->excerpt;
        $newPost->status= $request->status;
        $newPost->images=$request->images;
        $newPost->publish_date = $request->publish;
        $newPost->expired_date = $request->expired_data;
        $newPost->created_by=$request->created_by;
        $newPost->updated_by=$request->updated_by;
        $newPost->save();
        return response()->json($newPost);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy( $id)
    {
        Post::destroy($id);
        return (['messags' => 'deleted successfully']);
    }
}
