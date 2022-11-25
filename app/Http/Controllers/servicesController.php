<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicesController extends Controller
{
    Public function index(){
        
        return View('services.index');
    }
 }