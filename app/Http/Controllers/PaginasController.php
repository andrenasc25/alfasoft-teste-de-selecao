<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contato;

class PaginasController extends Controller
{
    public function index(){
        $contatos = Contato::all();
        return view('index', ['contatos' => $contatos]);
    }
    
    public function addContact(){
        return view('addContact');
    }
    
    public function contactDetails(){
        return view('contactDetails');
    }
}
