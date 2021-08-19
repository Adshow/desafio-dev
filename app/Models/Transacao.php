<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transacao extends Model
{
    protected $table = 'transacao';

    protected $fillable = ['tipo', 'data', 'valor', 'cpf', 'cartao', 'hora', 'dono', 'loja'];

    protected $timestamps = false;

    public function tipo()
    {
        return $this->hasOne(TipoTransacao::class, 'tipo');
    }
}