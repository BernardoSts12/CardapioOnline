<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Cardapio;

class categoria extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
    ];

    public function cardapio(){
        return $this->hasMany(Cardapio::class);
    }
}
