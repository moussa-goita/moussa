<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeController extends Controller
{
    Public function index(){
        return View('employe.index');
    }
}
