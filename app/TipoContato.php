<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoContato extends Model
{
    protected $table = 'tipo_contato';
    protected $fillable = ['descricao'];
    public $timestamps = false;
    
}
