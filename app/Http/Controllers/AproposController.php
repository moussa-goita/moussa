<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AproposController extends Controller
{
    Public function index(){
        return View('apropos.index');
    }
}
