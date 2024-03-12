<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    //

    public function index() {
    }

    public function layout() {
        return view('site');
    }

    public function layout2() {
        return view('pagina2');
    }

}
