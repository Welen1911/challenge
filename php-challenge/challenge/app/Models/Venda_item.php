<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda_item extends Model
{
    use HasFactory;

    public function venda() {
        return $this->belongsTo(Venda::class);
    }

    public function produto() {
        return $this->belongsTo(Produto::class);
    }
}
