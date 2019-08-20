<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Noticia;
class VistaNoticiasController extends Controller
{
    public function index(){
        $noticias = Noticia::orderBy('id','DESC')->get();
    	return view('/pagina/blog/index', compact('noticias'));
    }

    public function show($id){
        $noticia = Noticia::find($id);

    	return view('pagina/blog/show', compact('noticia'));

    }

    public function seccion_noticias(){
        $noticias = Noticia::orderBy('id','DESC')->take(6)->get();

       	return view('pagina/index', compact('noticias'));

    }
}
