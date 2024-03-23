<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function create(Request $request) {
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

        dd($post);
    }

    public function read(Request $r) {
        $post = new Post();

        $post = $post -> find(2);

        dd($post);
    }

    public function all(Request $r) {
        $posts = Post::all();

        return $posts;
    }

    public function update(Request $request) {
        $post = Post::where('id','>',1)->update([
            'author' => 'Alessandro',
            'title' => 'Alterado'
        ]);
        // $post > title = 'Meu Post atualizado';
        $post -> save();

        return $post;
    }

    public function delete(Request $request) {
        $post = Post::where('id','>',0)->delete();
        return $post;
    }
}
