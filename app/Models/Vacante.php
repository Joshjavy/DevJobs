<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vacante extends Model
{
    use HasFactory;
    protected $table="vacantes";
    protected $dates=['ultimo_dia'];
    protected $fillable=[
        'titulo',
        'salario_id',
        'categoria_id',
        'empresa',
        'ultimo_dia',
        'descripcion',
        'imagen',
        'user_id',
    ];

    public function categoria()
    {
        return $this->belongsTo(categoria::class);
    }

    public function salario(){
        return $this->belongsTo(Salario::class);
    }

    public function candidatos(){
        return $this->hasMany(Candidato::class);
    }
    
}
