<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Like;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            $user = Auth::user();
            $posts = Post::where('user_id', $user->id)->orderBy('created_at', 'desc')->get();
            return view('admin.home', compact('user', 'posts'));
        } else {
            return view('auth.login');
        }
    }

    public function destroy(Request $request)
    {
        $post = Post::find($request->id);
        $post->delete();
        return redirect()->route('post.index');
    }

    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required',
            'comment' => 'required|max:500'
        ]);

        $post = new Post;
        $post->user_id = Auth::user()->id;
        $post->image = $request->image;
        $post->comment = $request->comment;
        $request->file('image')->store('public');
        $post->save();
        return redirect()->route('post.index');
    }

    public function show()
    {
        return view('admin.detail');
    }
}
