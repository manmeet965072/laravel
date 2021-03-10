<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $posts = Post::with('user')->paginate(10);
        // return view('posts.index')->with([
        //     'posts' => $posts

        // ]);
        $posts = Post::all();
        return view('crud', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */


    public function storeUser(Request $request)
    {
        // $request->merge(['user_id' => 3]);
        $this->validate($request, [
            'user_id' => 'required',
            'name' => 'required',
            'description' => 'required'

        ]);
        Post::create($request->all());
        return redirect('crud')->with('successMsg', 'Post successfully added');


        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $post=Post::find($id);
        return view('detail',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $post = Post::find($id);
        return view('edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request, [
            'user_id' => 'required',
            'name' => 'required',
            'description' => 'required'

        ]);
        $myid=$request->id;
        $post = Post::find($myid);
        $post->user_id = $request->user_id;
        $post->name = $request->name;
        $post->description = $request->description;
        $post->save();

        return redirect('crud')->with('successMsg', 'Post successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        Post::find($id)->delete();

        return redirect('crud')->with('successMsg', 'Post successfully deleted');
    }
}
