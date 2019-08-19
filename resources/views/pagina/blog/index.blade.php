@extends('layouts.blog')

@section('content')
    	<div class="container" style="margin-top: 155px;">
			<div class="row">
				<h1>Noticias</h1>
				@foreach($noticias as $noticia)
					<div class="col-md-3">
						<article class="thumb-info custom-thumb-info-style-2 articulo-blog">
			                <span class="thumb-info-wrapper m-none">
			                    <a href="#" class="text-decoration-none" title="{{$noticia->titulo}}">
			                    	@php
			                    	if($noticia->imagen == ""){
			                        	$imagen = "../img/asesoria/default.jpeg";
			                    	}else{
			                        	$imagen = "imagenes/$noticia->imagen";

			                    	}
			                    	@endphp
			                    	<img src="{{$imagen}}" class="img-responsive img-blog" alt="">
			                    </a>
			                </span>
			                <span class="thumb-info-caption background-color-light p-md">
			                    <span class="date background-color-dark text-color-light">{{strftime('%b-%e-%G', strtotime($noticia->created_at))}}</span>
			                    <p class="custom-thumb-info-category">{{$noticia->categoria}}</p>
			                    <h4 class="mb-sm">
			                        <a href="{{route('blog.show', $noticia->id)}}" class="text-decoration-none text-color-dark">
			                            {{$noticia->titulo}}
			                        </a>
			                    </h4>
			                    <p>{{$noticia->resumen}}</p>
			                </span>
			            </article>
					</div>
				@endforeach
			</div>
		</div>
@endsection