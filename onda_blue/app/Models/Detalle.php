<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalle extends Model
{
    public $timestamps = false;
    public function facturas(){
        return $this-hasMany('App\Models\Factura');
    }
    public function prendas(){
        return $this->belongsTo('App\Models\Prenda', 'prenda_id');
    }

    protected $fillable = ['descripcion','cantidad','precio','factura_id','prenda_id'];
    
}