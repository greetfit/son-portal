<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    // GET /api/posts
    public function index()
    {
        return response()->json(Post::latest()->get());
    }

    // POST /api/posts
    public function store(Request $request)
    {
        $fields = $request->validate([
            'title'       => ['required', 'string', 'max:255'],
            'description' => ['required', 'string'], // matches your migration
        ]);

        $post = Post::create($fields);

        return $post;
    }

    // GET /api/posts/{post}
    public function show(Post $post)
    {
        return $post;
    }

    // PUT/PATCH /api/posts/{post}
    public function update(Request $request, Post $post)
    {
        $fields = $request->validate([
            'title'       => ['sometimes', 'required', 'string', 'max:255'],
            'description' => ['sometimes', 'required', 'string'],
        ]);

        $post->update($fields);

        return $post;
    }

    // DELETE /api/posts/{post}
    public function destroy(Post $post)
    {
        $post->delete();
        return response()->noContent(); // 204
    }
}
