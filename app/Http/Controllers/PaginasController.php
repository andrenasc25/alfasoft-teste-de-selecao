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
        $contatos = Contato::all();
        return view('contactDetails', ['contatos' => $contatos]);
    }
    
    public function editContact($id){
        $contato = Contato::where('id', $id)->get();
        return view('editContact', ['contato' => $contato]);
    }
}
