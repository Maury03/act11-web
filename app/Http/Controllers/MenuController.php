<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    function index() { 
        return view("menuPrincipal");
    }

    function showCasa() {
        return view("casa");
    }

    function showFotos() {
        return view("fotos");
    }

    function showContactos() {
        return view("contactos");
    }
}
