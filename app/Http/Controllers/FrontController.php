<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function branding(){
        return view('frontend.branding');
    }
    public function desarrollo(){
        return view('frontend.desarrollo');
    }
    public function marketing(){
        return view('frontend.marketing');
    }
    public function contacto(){
        return view('frontend.contacto');
    }
}
