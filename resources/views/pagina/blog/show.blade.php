@extends('layouts.blog')

@section('content')
<p style="margin-top: 155px; margin-left: 30px;"><a href="{{route('blog.index')}}" style="color: #777;"><i class="fas fa-chevron-circle-left"></i>  Ir atrás</a></p>

    	<div class="container" >
			<div class="row">
				<h1 style="text-align: center">{{$noticia->titulo}}</h1>
				<div class="col-md-2"></div>
					<div class="col-md-8">
			                    	@php
			                    	if($noticia->imagen == ""){
			                        	$imagen = "img/asesoria/default.jpeg";
			                    	}else{
			                        	$imagen = "imagenes/$noticia->imagen";

			                    	}
			                    	@endphp
			                    	<img src="{{URL::asset($imagen)}}" class="img-responsive img-show" alt="">
			                    
			                    <p class="date  text-color-dark" style="margin-top: 30px; margin-bottom: 0px;"><i class="fas fa-clock"></i>  {{strftime('%b-%e-%G', strtotime($noticia->created_at))}}</p>
			                    <p class="custom-thumb-info-category">{{$noticia->categoria}}</p>
			                    
			                    <p>{!! $noticia->contenido !!}</p>
					</div>
			</div>
		</div>
@endsection