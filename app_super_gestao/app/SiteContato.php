<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiteContato extends Model
{
    protected $table = 'site_contatos';
    protected $fillable = ['name', 'telefone', 'motivo_contato', 'email', 'mensagem'];
}
