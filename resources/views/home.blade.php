@extends('layouts.master_home')
@section('home_content')
<div class="main-banner wow fadeIn" id="top" data-wow-duration="1s" data-wow-delay="0.5s">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="row">
            <div class="col-lg-6 align-self-center">
              <div class="left-content header-text wow fadeInLeft" data-wow-duration="1s" data-wow-delay="1s">
            
                <h6>{{$abouts->title}}</h6>
                <h2>  Encontraras aquí <em>la asesoría</em> &amp; <span>  necesaria para que tu emprendimiento</span>  llegue a cada rincón del mundo </h2>
        
            
            
              </div>
            </div>
            <div class="col-lg-6">
              <div class="right-image wow fadeInRight" data-wow-duration="1s" data-wow-delay="0.5s">
                <img src="fontend/assets/images/banner-right-image.png" alt="team meeting">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<!--acerca de nosotros-->

<div class="aviso  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s"">
  <p class="aviso-1">
    
    Hacemos que tu sitio web sea posicionado dentro los rangos de búsqueda,
     no importa el buscador tu sitio será visible para tus potenciales clientes

  </p>
</div>
  <div id="portfolio" class="our-portfolio section">
    <div class="container">

    
      <div class="row">
        <div class="col-lg-6 offset-lg-3">
          <div class="section-heading  wow bounceIn" data-wow-duration="1s" data-wow-delay="0.2s">
            <h2>Lo que podemos <em>hacer por ti </em>con nuestro <span> potencial </span></h2>
          </div>
        </div>
     
      </div>
      <div class="row">
        <div>
          <h2 class="col-lg-6 offset-lg-3"> ¿Que tienes en mente? cuéntanos, podemos hacerlo realidad</h2>
        </div>
       
        <div class="col-lg-3 col-sm-6">
         
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.3s">
              <div class="hidden-content">
                <h4>Optimización </h4>
                <p>Paginas livianas que harán que tus clientes se sientan cómodos navegando por tu sitio.</p>
              </div>
              <div class="showed-content">
                <img src="fontend/assets/images/optimizacion-tuwebenlinea.png" alt="optimizamos tu web">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.4s">
              <div class="hidden-content">
                <h4>Control total</h4>
                <p>Paginas dinámicas, podrás tener control total del contenido que subas.</p>
              </div>
              <div class="showed-content">
                <img src="fontend/assets/images/control-total-tuwebenlinea.png" alt="control total de tus contenidos">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.5s">
              <div class="hidden-content">
                <h4>Asesoría </h4>
                <p>Asesorías de diseño grafico para que crear tus contenidos con información de tu empresa</p>
              </div>
              <div class="showed-content">
                <img src="fontend/assets/images/apoyo.png" alt="asesoria en tu web en linea">
              </div>
            </div>
          </a>
        </div>
        <div class="col-lg-3 col-sm-6">
          <a href="#">
            <div class="item wow bounceInUp" data-wow-duration="1s" data-wow-delay="0.6s">
              <div class="hidden-content">
                <h4>Diseño</h4>
                <p>Contamos con plataformas digitales para tu empresa o institución que requieran mas control para tu empresa.</p>
              </div>
              <div class="showed-content">
                <img src="fontend/assets/images/disenador-tuwebenlinea.png" alt="">
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  {{-- <div id="blog" class="our-blog section">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="section-heading">
            <h2>Check Out What Is <em>Trending</em> In Our Latest <span>News</span></h2>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInDown" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="top-dec">
            <img src="fontend/assets/images/blog-dec.png" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="left-image">
            <a href="#"><img src="fontend/assets/images/big-blog-thumb.jpg" alt="Workspace Desktop"></a>
            <div class="info">
              <div class="inner-content">
                <ul>
                  <li><i class="fa fa-calendar"></i> 24 Mar 2021</li>
                  <li><i class="fa fa-users"></i> TemplateMo</li>
                  <li><i class="fa fa-folder"></i> Branding</li>
                </ul>
                <a href="#"><h4>SEO Agency &amp; Digital Marketing</h4></a>
                <p>Lorem ipsum dolor sit amet, consectetur and sed doer ket eismod tempor incididunt ut labore et dolore magna...</p>
                <div class="main-blue-button">
                  <a href="#">Discover More</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.25s">
          <div class="right-list">
            <ul>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 18 Mar 2021</span>
                  <a href="#"><h4>New Websites &amp; Backlinks</h4></a>
                  <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="fontend/assets/images/blog-thumb-01.jpg" alt=""></a>
                </div>
              </li>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 14 Mar 2021</span>
                  <a href="#"><h4>SEO Analysis &amp; Content Ideas</h4></a>
                  <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="assets/images/blog-thumb-01.jpg" alt=""></a>
                </div>
              </li>
              <li>
                <div class="left-content align-self-center">
                  <span><i class="fa fa-calendar"></i> 06 Mar 2021</span>
                  <a href="#"><h4>SEO Tips &amp; Digital Marketing</h4></a>
                  <p>Lorem ipsum dolor sit amsecteturii and sed doer ket eismod...</p>
                </div>
                <div class="right-image">
                  <a href="#"><img src="fontend/assets/images/blog-thumb-01.jpg" alt=""></a>
                </div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div> --}}

  
@endsection