<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CamisasTimeController extends Controller
{
    public function index(){
        return view("admin_layout.index");
    }
}
