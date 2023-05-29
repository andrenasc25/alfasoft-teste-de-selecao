<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContatoRequest;
use App\Http\Requests\UpdateContatoRequest;
use App\Models\Contato;
use Illuminate\Support\Facades\Validator;

class ContatoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContatoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContatoRequest $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5|string',
            'contact' => 'required|min:9|max:9',
            'email_address' => 'required|email'
        ],
        [
            'name.required' => 'O campo nome não pode ficar vazio',
            'name.min' => 'O campo nome precisa ter pelo menos 5 caracteres',
            'name.string' => 'O campo nome precisa ser do tipo texto',
            'contact.required' => 'O campo contato não pode ficar vazio',
            'contact.min' => 'O campo contato precisa ter 9 dígitos',
            'contact.max' => 'O campo contato precisa ter 9 dígitos',
            'email_address.required' => 'O campo email não pode ficar vazio',
            'email_address.email' => 'O campo email precisa ser do tipo email'
        ]);
        
        if ($validator->fails()) {
            return $validator->errors();
        }
        
        Contato::create([
            'name' => $request->name,
            'contact' => $request->contact,
            'email_address' => $request->email_address
        ]);
        
        return 'Contato adicionado com sucesso';
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function show(Contato $contato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function edit(Contato $contato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContatoRequest  $request
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContatoRequest $request, Contato $contato)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|min:5|string',
            'contact' => 'required|min:9|max:9',
            'email_address' => 'required|email'
        ],
        [
            'name.required' => 'O campo nome não pode ficar vazio',
            'name.min' => 'O campo nome precisa ter pelo menos 5 caracteres',
            'name.string' => 'O campo nome precisa ser do tipo texto',
            'contact.required' => 'O campo contato não pode ficar vazio',
            'contact.min' => 'O campo contato precisa ter 9 dígitos',
            'contact.max' => 'O campo contato precisa ter 9 dígitos',
            'email_address.required' => 'O campo email não pode ficar vazio',
            'email_address.email' => 'O campo email precisa ser do tipo email'
        ]);
        
        if ($validator->fails()) {
            return $validator->errors();
        }
        
        Contato::where('id', $request->id)->update([
            'name' => $request->name,
            'contact' => $request->contact,
            'email_address' => $request->email_address
        ]);
        
        return 'Dados atualizados';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contato  $contato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contato $contato, $id)
    {
        Contato::find($id)->delete();
        return 'Contato Deletado';
    }
}
