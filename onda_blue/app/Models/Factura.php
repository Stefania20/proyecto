<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Factura extends Model
{
   
    public function user (){
        return $this->belongsTo('App\Models\User','user_id');
    }
    public function detalle (){
        return $this->hasMany('App\Models\Detalle','factura_id');
    }
    protected $fillable = [
        'user_id',
        'fecha',
        'estado',
    ];

    public $timestamps=false;
}
