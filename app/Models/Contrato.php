<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    protected $fillable = [
        'solicitante',
        'data_atualizacao',
        'recebimento',
        'data_lai',
        'publicacao',
        'categoria_id',
        'empresa_id', // <== ADICIONE ESTA LINHA
    ];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
}
