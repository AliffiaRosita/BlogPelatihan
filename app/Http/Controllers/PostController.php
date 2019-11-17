<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::all();
        return view("post.index",[
            'postss' => $posts
            ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();

        return view('post.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        //eloquentORM
        // $post = $request->all();
        // $save = Post::create($post);
        $save = Post::create([
            'title' => $request->title,
            'description'=>$request->description,
            'user_id' =>$request->user_id
        ]);

        //querybuilder
        // $save = DB::table('posts')->insert([
        //     'title' => $request->title,
        //     'description'=>$request->description,
        //     'user_id' =>$request->user_id
        // ]);
        if($save){
            return redirect('post');
        }
         return redirect()->back()->with('error','Gagal Menambah Data');
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
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posts = Post::where('id',$id)->first();
        $users = User::all();
        return view('post.edit',compact('posts','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, $id)
    {

        $post = Post::where('id',$id)->first();
        $update = $post->update([
            'title' => $request->title,
            'description'=> $request->description,
            'user_id' => $request->user_id
        ]);
        if ($update) {
            return redirect('post');
        }
        return redirect()->back()->with('error','Gagal Mengubah Post');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::where('id',$id)->first();
        $delete = $post->delete();
        if ($delete) {
            return redirect('post');
        }
        return redirect('post')->with('error','Gagal Menghapus Post');
    }
}
