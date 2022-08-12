<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    public function index()
    {
        $usuarios = HTTP::get('https://jsonplaceholder.typicode.com/albums/1/photos');
        $usuariosArray = $usuarios->json();
        
        return view('admin.index', compact('usuariosArray'));
    }
}
