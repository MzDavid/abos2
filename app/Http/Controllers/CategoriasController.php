<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CategoriasController extends Controller
{
    public function nosotros(){
            return view('index/about');
    }

    public function reconocimientos(){
            return view('index/awards');
    }

    public function areas(){
            return view('index/areas');
    }

    public function contacto(){
            return view('index/contact');
    }

    public function temporal(){
            return view('index/single');
    }

}
