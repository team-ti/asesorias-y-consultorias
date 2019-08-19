@extends('layouts.app')

@section('content')

<div class="container">
	<form  action="{{route('noticias.update', $noticia->id)}}" method="POST" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <input name="_method" type="hidden" value="PUT">
              
        <h1 align="center" style="font-weight: bold;">Editar Noticia</h1>

        @if (count($errors) > 0)

<div class="alert alert-danger" style="font-size: 16px">
  <ul>
    @foreach ($errors->all() as $error)
      <li> {{ $error }}</li>
    @endforeach
  </ul>
</div>

@else

  @if(session()->has('msj'))

    <div class="alert alert-success" role="alert" style="font-size: 16px">Datos actualizados correctamente</div>
  @endif
@endif

        <div class="form-group" >
            <label for="inputTitulo">Titulo*</label>
            <input type="text" class="form-control" id="inputTitulo" name="inputTitulo" placeholder="Titulo" required="required" maxlength="255" value="{{ $noticia->titulo }}" >
        </div>

        <div class="form-group" >
            <label for="inputCategoria">Categoria*</label>
            <input type="text" class="form-control" id="inputCategoria" name="inputCategoria" placeholder="Categoria" required="required" maxlength="255" value="{{ $noticia->categoria }}" >
        </div>
		
				<div class="row">
        	<div class="col-md-5" style="height: 300px;" >
	            <div class="panel panel-default" >
	                <div class="panel-body" >
	                   <h4 style="text-align: center; font-weight: bold;">Imagen Portada</h4>
	                  <hr class="tall" style="margin-top: 0px; margin-bottom: 15px;">
	                   <h5 style="margin-left: 15px; font-weight: bold; ">Dimensiones(aprox)<span style="float: right; color: #62b0d1; margin-right: 20px;">800 x 400</span></h5>
	                  <hr class="tall" style="margin-top: 0px; margin-bottom: 15px;">
	                  <h5 style="margin-left: 15px; font-weight: bold;">Formato<span style="float: right;color: #62b0d1; margin-right: 20px;">.JPG ó .PNG</span></h5>
	                  <hr class="tall" style="margin-top: 0px; margin-bottom: 58px;">  
	                  <center><input type="file" id="imagen" name="imagen" ></center>
	                
	                  <h5></h5>
	                </div>
	            </div>
          </div>
	        <div class="form-group col-md-7" >
	            <label for="inputLead" style="margin-top: 10px; font-weight: bold;">Texto Resumen*</label>
	            <textarea class="form-control" rows="7" id="inputLead" name="inputLead" placeholder="Texto resumen" required="required" maxlength="500" >{{ $noticia->resumen }}</textarea>
	        </div>
	      </div>

        <div >
            <label for="textedit" style="font-weight: bold;">Cuerpo Noticia*</label>
            <textarea name="Cuerpo" id="Cuerpo" class="editor" rows="30" cols="30">{{ $noticia->contenido }}</textarea>
              {{-- <textarea name="inputCuerpo" id="editor1" rows="30" cols="80"></textarea> --}}
        </div>

        <div class="form-group" style="text-align: right;">
            <button type="submit" class="btn " style="margin-top: 20px; background-color: #284789; color: white;"  >Guardar</button>
        </div>
    </form>
</div>


@section('scripts')
    {{-- Editor Tinymce --}}
    <script type="text/javascript" src="{{URL::asset('js/tinymce/jquery.tinymce.min.js')}}"></script> 
    <script type="text/javascript" src="{{URL::asset('js/tinymce/tinymce.min.js')}}"></script> 
    <script type="text/javascript" src="{{URL::asset('js/tinymce/langs/es.js')}}"></script>

<script>

  var editor_config = {
    path_absolute : "/",
    selector: "textarea.editor",
    language: 'es',
     plugins: [
      "advlist autolink lists link image charmap print preview hr anchor pagebreak",
      "searchreplace wordcount visualblocks visualchars code fullscreen",
      "insertdatetime media nonbreaking save table contextmenu directionality",
      "emoticons template paste textcolor colorpicker textpattern"
    ],
    toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
    relative_urls: false,
    file_browser_callback : function(field_name, url, type, win) {
      var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
      var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

     var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
      if (type == 'image') {
        cmsURL = cmsURL + "&type=Images";
      } else {
        cmsURL = cmsURL + "&type=Files";
      }

      /*tinymce.activeEditor.windowManager.open({
        file: '?= route('elfinder.tinymce4') ?>',// use an absolute path!
        title: 'File manager',
        width: 900,
        height: 450,
        resizable: 'yes'
      }, {
        setUrl: function (url) {
          win.document.getElementById(field_name).value = url;
        }
      });*/
    }
  };

  tinymce.init(editor_config );

 
</script>






@endsection 


@endsection