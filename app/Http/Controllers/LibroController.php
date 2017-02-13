<?php

namespace App\Http\Controllers;

use App\libro;
use Illuminate\Http\Request;

use App\Quotation;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

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

    public function buscar()
    {
        $dato = Input::get('libro');
        $libros = DB::table('libros')->where('nombre', 'like', "%{$dato}%")->get();
        return json_encode($libros);

    }

}
