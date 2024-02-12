<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index() {
        $nome = 'Gustavo';
        $idade = 90;

        $data = [
            'apelido_nome' => $nome,
            'idade' => $idade
        ];

        return view('bemvindo', $data);
    }

    public function exit() {
        return view('sair');
    }
}
