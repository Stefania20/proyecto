<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prenda extends Model
{
    public function detalle (){
        return $this-belongsT('App\Models\Detalle');
    }
}
