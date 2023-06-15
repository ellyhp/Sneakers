<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pedido extends Model
{
    use HasFactory;

    // muchos pedidos tienen 1 producto

    public function product()
    {
        return $this->belongsTo(Product::class);
    }


    //llave foranea de usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
