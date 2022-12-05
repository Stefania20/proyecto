<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Factura;

use Illuminate\Http\Request;


class UserController extends Controller
{
    public function index(){
        
        return view("user.users_index");
    }

    public function store(){
        
        return view("user.userf");
    }
}
