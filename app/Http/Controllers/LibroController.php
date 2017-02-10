<?php

namespace App\Http\Controllers;

use App\libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        $libros= \App\libro::paginate();
        return view('home')->with(['libros' => $libros]);

    }
    public function crear()
    {
        return view('nuevolibro');
    }

    public function store()
    {


        libro::create(request()->all());
        return redirect()->to('/');
    }
    public function show($id)
    {
        $libro = libro::find($id);
        return view('mostrar', ['libro' => $libro]);
    }


}
