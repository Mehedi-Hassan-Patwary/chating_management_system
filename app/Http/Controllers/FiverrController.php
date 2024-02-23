<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fiverrController extends Controller
{
    public function index(){
        return view('frontend.pages.fiverr.fiverr');
    }
}
