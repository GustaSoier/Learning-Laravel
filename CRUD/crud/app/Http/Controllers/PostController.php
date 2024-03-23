<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::all();

        return $posts;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
            $new_post = [
                'title'     => 'Meu primeiro Post',
                'content'   => 'Conteúdo Qualquer',
                'author'    => 'Soier'
            ];


            //forma mais convencional de criar um registro no banco de dados
            // $post = new Post($new_post);
            // $post -> save();

            $post = new Post();

            $post -> title = 'Meu segundo Post';
            $post -> content = 'Qualquer Conteúdo';
            $post -> author = 'Soier';

            return($post);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = new Post();

        $post = $post -> find($id);

        dd($post);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $posts = Post::find($id)->update([
            'author' => 'Alessandro',
            'title' => 'Alterado'
        ]);
        // $post > title = 'Meu Post atualizado';
        $posts -> save();

        return $posts;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id)->delete();
        return $post;
    }
}
