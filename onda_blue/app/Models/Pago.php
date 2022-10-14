<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pago extends Model
{
    
    public function facturas(){
        return $this-hasMany('App\Models\Factura');
    }
}
