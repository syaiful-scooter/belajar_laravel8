<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PostController extends Controller
{
    public function index()
    {

        //get data from table post
        $posts = Post::latest()->get();

        // make response JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data Post',
            'data' => $posts
        ], 200);
    }

    // public function index()
    // {
    //     return csrf_token();
    // }


    public function show($id)
    {
        // find post by id 
        $post = Post::FindOrFail($id);

        // make response JSON
        return response()->json([
            'success' => true,
            'message' => 'List Data Post',
            'data' => $post
        ], 200);
    }

    public function store(Request $request)
    {
        // set validation 
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required'
        ]);

        // response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // simpan ke data base 
        $post = Post::create([
            'title' => $request->title,
            'content' => $request->content
        ]);

        // jika simpan sukses 
        if ($post) {
            return response()->json([
                'success' => true,
                'message' => 'Post Created',
                'data' => $post
            ], 201);
        }

        // jika simpan gagal 
        return response()->json([
            'success' => false,
            'message' => 'Post Failed to Save',
        ], 409);
    }

    public function update(Request $request, Post $post)
    {
        // dd($post->id);
        // set validation 
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'content' => 'required'
        ]);

        // response error validation
        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // find post by id
        $post = Post::FindOrFail($post->id);

        if ($post) {
            // simpan ke data base 
            $post->update([
                'title' => $request->title,
                'content' => $request->content
            ]);

            // jika simpan sukses 
            return response()->json([
                'success' => true,
                'message' => 'Post Updated',
                'data' => $post
            ], 200);
        }

        // jika data post tidak ditemukan
        return response()->json([
            'success' => false,
            'message' => 'Post Not Found',
        ], 404);
    }

    public function destroy($id)
    {
        // find post by id
        $post = Post::FindOrFail($id);

        if ($post) {

            // hapus post nya 
            $post->delete();

            // jika hapus sukses 
            return response()->json([
                'success' => true,
                'message' => 'Post Deleted',
            ], 200);
        }

        // jika data post tidak ditemukan
        return response()->json([
            'success' => false,
            'message' => 'Post Not Found',
        ], 404);
    }
}
