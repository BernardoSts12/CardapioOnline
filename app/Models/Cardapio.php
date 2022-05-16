<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Categoria;

class Cardapio extends Model
{
    use HasFactory;

    protected $guarded= [];

    public function categoria(){
        return $this->belongsTo(Categoria::class,'id_categoria');
    }
}
