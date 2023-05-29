<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contato extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'contact', 'email_address'];
    
    protected $dates = ['deleted_at'];
    
    public function rules(){
        return [
            'name' => 'required|min:5|string',
            'contact' => 'required|min:9|max:9',
            'email_address' => 'required|email'
        ];
    }

    public function feedback(){
        return [
            'name.required' => 'O campo nome não pode ficar vazio',
            'name.min' => 'O campo nome precisa ter pelo menos 5 caracteres',
            'name.string' => 'O campo nome precisa ser do tipo texto',
            'contact.required' => 'O campo contato não pode ficar vazio',
            'contact.min' => 'O campo contato precisa ter 9 dígitos',
            'contact.max' => 'O campo contato precisa ter 9 dígitos',
            'email_address.required' => 'O campo email não pode ficar vazio',
            'email_address.email' => 'O campo email precisa ser do tipo email'
        ];
    }
}
