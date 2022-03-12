<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        
      return view('pages.index');
     }

     public function login(){
       return view('pages.login');
     }
     public function register(){
       return view('pages.register');
     }
}
