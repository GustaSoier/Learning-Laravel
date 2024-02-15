<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index() {

        $qualquer_coisa= [
            'nome' => 'Gustavo',
            'html' => '<b style="color: red">Negrito</b>'
        ];

        return view('bemvindo', $qualquer_coisa);
    }

}
