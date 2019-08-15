@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2>Listado de noticias</h2>
            <a href="{{url('noticias.create')}}">Crear noticias</a>
        </div>
    </div>
</div>
@endsection
