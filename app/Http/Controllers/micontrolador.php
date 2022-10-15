<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\libro;

class micontrolador extends Controller
{
        public function vista1()
        {
            return view ('vista1');
        }
    
        public function vista2()
        {
            return view ('vista2');
        }
    
        public function vista3()
        {
            return view ('vista3');
        }
    
        public function registralibro()
        {
            return view('registralibro');
        }
        public function guardarlibro(Request $request)
        {
            $libros = new Libro;
            $libros->nombre=$request->input('nombre');
            $libros->genero=$request->input('genero');
            $libros->editorial=$request->input('editorial');
            $libros->save();
    
            return redirect()->route('registrarlibro');
        }
    
            public function consultalibros(){
            $libros = Libro::all();
            return view('consulta', compact('libros'));
        }
    
        public function eliminarLibro($id){
            $libro=Libro::find($id);
            $libro->delete();
            return redirect()->route('consultalibros');
        }
        
        public function muestralibro($id){
            $libros=Libro::find($id);
            return view('muestralibro', compact('libros'));
        }
    
        public function editalibro(Request $request, $id){
            $libros=Libro::find($id);
    
            $libros->nombre=$request->input('nombre');
            $libros->genero=$request->input('genero');
            $libros->editorial=$request->input('editorial');
            $libros->save();
            return redirect()->route('consultalibros');
        }
        
}

