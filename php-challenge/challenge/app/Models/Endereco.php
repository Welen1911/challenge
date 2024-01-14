<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    public function cidade() {
        return $this->belongsTo(Cidade::class);
    }

    public function clientes() {
        return $this->hasMany(Cliente::class);
    }
}
