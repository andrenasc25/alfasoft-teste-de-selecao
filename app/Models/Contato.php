<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'contact', 'email_address'];
    
    /*public static $rules = [
        'name' => 'required|min:5|string',
        'contact' => 'required|min:9|max:9|integer',
        'email_address' => 'required|email'
    ];*/
}
