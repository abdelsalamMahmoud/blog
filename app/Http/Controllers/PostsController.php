<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('index',compact('posts'));
    }


    public function create()
    {
        return view('create');
    }


    public function store(StorePostRequest $request)
    {
        try{
            Post::create([
                'title'=>$request->input('title'),
                'content'=>$request->input('content'),
                'user_id'=>auth()->user()->id,
            ]);
            return redirect()->route('posts.index');
        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


    public function show($id)
    {
        $post = Post::findOrFail($id);
        return view('show',compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('edit',compact('post'));
    }

    public function update(UpdatePostRequest $request , $id)
    {
        try{
            $post = Post::findOrFail($id);
            $post->update([
                'title'=>$request->input('title'),
                'content'=>$request->input('content'),
            ]);
            return redirect()->route('posts.index');
        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

    }

    public function delete($id)
    {
        try {
            $section = Post::findOrFail($id);
            $section->delete();
            return redirect()->route('posts.index');
        }catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }


}
