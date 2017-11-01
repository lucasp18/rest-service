<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    protected $table = 'contato';

    protected $fillable = [ 'id', 'nome', 'email', 'id_tipo_contato'
    ];

    public function tipoContato()
    {
    	return $this->belongsTo(TipoContato::class);
    }
}
