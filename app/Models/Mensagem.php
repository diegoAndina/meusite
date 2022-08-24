<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mensagem extends Model
{
    protected $fillable = ['nome', 'telefone', 'email', 'mensagem'];

    use HasFactory;
}
