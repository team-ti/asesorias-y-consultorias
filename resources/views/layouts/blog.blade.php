<!DOCTYPE html>
<html>
    <head>

        <!-- Basic -->
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">   

        <title>E.P Asesorias y Consultorias</title>   

        <meta name="keywords" content="HTML5 Template" />
        <meta name="description" content="Porto - Responsive HTML5 Template">
        <meta name="author" content="okler.net">

        <!-- Favicon -->
        <link rel="apple-touch-icon" href="img/apple-touch-icon.png">

        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <!-- Web Fonts  -->
        <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">

        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css" integrity="sha384-i1LQnF23gykqWXg6jxC2ZbCbUMxyw5gLZY6UiUS98LYV5unm8GWmfkIS6jqJfb4E" crossorigin="anonymous">  

        <!-- Vendor CSS -->
        <link rel="stylesheet" href="{{URL::asset('vendor/bootstrap/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('vendor/font-awesome/css/font-awesome.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('vendor/animate/animate.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
        <link rel="stylesheet" href="{{URL::asset('vendor/magnific-popup/magnific-popup.min.css')}}">

        <!-- Theme CSS -->
        <link rel="stylesheet" href="{{URL::asset('css/theme.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/theme-elements.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/theme-blog.css')}}">
        <link rel="stylesheet" href="{{URL::asset('css/theme-shop.css')}}">

        <!-- Current Page CSS -->
        <link rel="stylesheet" href="{{URL::asset('vendor/rs-plugin/css/settings.css')}}">
        <link rel="stylesheet" href="{{URL::asset('vendor/rs-plugin/css/layers.css')}}">
        <link rel="stylesheet" href="{{URL::asset('vendor/rs-plugin/css/navigation.css')}}">

        <!-- Skin CSS -->
        <link rel="stylesheet" href="{{URL::asset('css/skins/skin-one-page-agency.css')}}"> 

        <!-- Demo CSS -->
        <link rel="stylesheet" href="{{URL::asset('css/demos/demo-one-page-agency.css')}}">

        <!-- Theme Custom CSS -->
        <link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">

        <!-- Head Libs -->
        <script src="{{URL::asset('vendor/modernizr/modernizr.min.js')}}"></script>

        <!--css personalizado-->
        <link rel="stylesheet" type="text/css" href="{{URL::asset('css/estilos.css')}}">

    </head>
    <body data-spy="scroll" data-target=".wrapper-spy" data-offset="100">
            <header id="header" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAtElement': '#header', 'stickySetTop': '0', 'stickyChangeLogo': false}" style="top:0">
                <div class="header-body">
                    <div class="header-container container">
                        <div class="header-row">
                            <div class="header-column custom-divider-1">
                                <div class="header-logo">
                                    <a href="demo-one-page-agency.html">
                                        <img alt="Logo" width="100%" src="{{URL::asset('img/asesoria/logo-ep.png')}}">
                                    </a>
                                </div>
                            </div>
                            <div class="header-column">
                                <div class="header-row">
                                    <div class="header-nav header-nav-center pt-xs">
                                        <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
                                            <i class="fa fa-bars"></i>
                                        </button>
                                       
                                    </div>
                                    <p style="float: right;"><a href="/" style="color: #777"><i class="fas fa-home"></i>  Ir a inicio</a></p>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </header>

            <main class="py-4">
                @yield('content')
            </main>
        </body>
</html>