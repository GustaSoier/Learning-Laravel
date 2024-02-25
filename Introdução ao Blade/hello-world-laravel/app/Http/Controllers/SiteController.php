<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index() {

        $qualquer_coisa= [
            'ingredientes' => [
                'farinha',
                'ovos',
                'farinha',
                'ovos'
            ]
        ];

        return view('bemvindo', $qualquer_coisa);
    }

    public function index2() {
        return view('include');
    }

}
