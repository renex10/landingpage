<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    {{-- <link rel="preconnect" href="https://fonts.gstatic.com"> --}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">



    <title>tu web en linea</title>

    <!-- Bootstrap core CSS -->
    {{-- <link href={{asset('fontend/vendor/bootstrap/css/bootstrap.min.css')}} rel="stylesheet"> --}}
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href={{ asset('fontend/assets/css/miscambios.css') }}>

    {{-- <link rel="stylesheet" href={{asset('fontend/assets/css/fontawesome.css')}}> --}}
    <link rel="stylesheet" href={{ asset('fontend/assets/css/templatemo-space-dynamic.css') }}>
    <link rel="stylesheet" href={{ asset('fontend/assets/css/animated.css') }}>
    <link rel="stylesheet" href={{ asset('fontend/assets/css/owl.css') }}>
    {
    <script src="https://kit.fontawesome.com/b4c1652db4.js" crossorigin="anonymous"></script>

    <!--
    
TemplateMo 562 Space Dynamic

https://templatemo.com/tm-562-space-dynamic

-->
    =

</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <h4>Spac<span>Dyna</span></h4>
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ route('home') }}" class="active">inicio</a></li>
                            <li class="scroll-to-section"><a href="{{ route('planes') }}">planes</a></li>
                            <li class="scroll-to-section"><a href="{{ route('servicios') }}">servicios</a></li>
                            {{-- <li class="scroll-to-section"><a href="#portfolio">diseños</a></li> --}}
                            {{-- <li class="scroll-to-section"><a href="#blog">Blog</a></li> --}}
                            {{-- <li class="scroll-to-section"><a href="{{route('contact')}}">mensajeanos</a></li> --}}
                            <li class="scroll-to-section">
                                <div class="main-red-button"><a href="{{ route('contacto') }}">Contacto</a></div>
                            </li>
                        </ul>
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-----contenido------->
    @yield('home_content')
    <!-----fin-contenido------->
    <section class="main">
        <div class="fab-btns">
            <div class="fab-btn">
                <i class="fab fa-facebook-f"></i>

            </div>

            <div class="fab-btn">
                <i class="fab fa-twitter"></i>

            </div>

            <div class="fab-btn">
               <a href=""><i class="fab fa-whatsapp"></i></a> 

            </div>

           

        </div>

        <div class="fab-btn" id="fab">
          <i class="fas fa-plus"></i>

      </div>


    </section>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.25s">
                    <p>© todos los derechos reservados miweb en linea 2022 </p>


                </div>
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src={{ asset('fontend/vendor/jquery/jquery.min.js') }}></script>
    {{-- <script src={{asset('fontend/vendor/bootstrap/js/bootstrap.bundle.min.js')}}></script> --}}
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous">
    </script>
    <script src={{ asset('fontend/assets/js/owl-carousel.js') }}></script>
    <script src={{ asset('fontend/assets/js/animation.js') }}></script>
    <script src={{ asset('fontend/assets/js/imagesloaded.js') }}></script>
    <script src={{ asset('fontend/assets/js/templatemo-custom.js') }}></script>
    <script src={{ asset('fontend/assets/js/app.js') }}></script>


</body>

</html>
