<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
    public function index(){
        return view('index');
    }
    
    public function addContact(){
        return view('addContact');
    }
    
    public function contactDetails(){
        return view('contactDetails');
    }
}
