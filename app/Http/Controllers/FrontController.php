<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class FrontController extends Controller
{
    public function index(){
        return view('pages.pages_front.home');
    }

    public function tentang(){
        return view('pages.pages_front.tentang');
    }

    public function artikel(){
        return view('pages.pages_front.artikel');
    }

}


