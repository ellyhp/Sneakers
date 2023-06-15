<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product_pedido extends Model
{
    use HasFactory;

        // muchos pedidos tienen 1 producto

        public function product()
        {
            return $this->belongsTo(Product::class);
        }
    
    
        //llave foranea de usuario
        public function pedido()
        {
            return $this->belongsTo(Pedido::class);
        }
}
