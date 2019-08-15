<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Noticia;
use Storage;

class NoticiasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
      $noticias = Noticia::latest()
      ->take(6)
      ->get();

        return view('administrador/index', compact('noticias'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('administrador/create');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'titulo' => 'required',
            'resumen' => 'required',
            'contenido' => 'required',
        ]);

        $noticias = new Noticia();
        $noticias->titulo = $request->inputTitulo;
        $noticias->resumen = $request->inputLead;
        $noticias ->contenido = $request->Cuerpo;

        $img = $request->file('fileImg');
            if (is_null($img)) {
            $file_route ='default';
            
                
            }else{
            $file_route =time().'_'.$img->getClientOriginalName();
            // \Storage::disk('imagNoticias')->put($file_route, \File::get($img));
            Storage::disk('imgNoticias')->put($file_route, file_get_contents($img->getRealPath()));
             }

            $noticias->imagen = $file_route;


            $noti = $noticias ->save(); 

        $resultado = 'completado';
        return back()->with('msj','Datos guardados correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $noticia = Noticia::find($id)

        return view('administrador/show', compact('noticia'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
