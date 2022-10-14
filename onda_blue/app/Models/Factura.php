<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
    public function pago (){
        return $this-belongsT('App\Models\Pago');
    }
    public function detalle (){
        return $this-belongsT('App\Models\Detalle');
    }
}
