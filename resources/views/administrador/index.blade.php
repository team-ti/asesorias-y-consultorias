@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Listado de noticias</h2>
            <a class="btn btn-primary" href="{{route('noticias.create')}}">Crear noticias</a>

            @if(session()->has('msj'))
					    <div class="alert alert-success" role="alert" style="font-size: 16px">{{ Session::get('msj') }}</div>
					  @endif

            <table class="table" style="margin-top: 20px">
			  <thead>
			    <tr>
			      <th scope="col">Titulo</th>
			      <th scope="col">Categoria</th>
			      <th scope="col"></th>
			    </tr>
			  </thead>
			  <tbody>
			  	
			  	@foreach($noticias as $noticia)
			    <tr>

			      <td><a href="{{route('noticias.show', $noticia->id)}}">{{$noticia->titulo}}</a></td>
			      <td>{{$noticia->categoria}}</td>
			      <td>
			      	<form action="{{route('noticias.destroy', $noticia->id)}}" method="POST">
			          <input name="_method" type="hidden" value="DELETE">
			          {!! csrf_field() !!}
			          <button type="submit"  class="btn btn-danger" id="complexConfirm"  onclick="return confirm('¿Está seguro de eliminar esta noticia?')" style="padding: 0px 5px;">
			           <span style="font-weight: bold;">X</span>
			          </button>
			        </form>
			      </td>
			    </tr>
			    @endforeach
			   
			  </tbody>
			</table>
        </div>
    </div>
</div>
@endsection
