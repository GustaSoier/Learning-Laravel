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
}
