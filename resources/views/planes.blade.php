@extends('layouts.master_home')
@section('home_content')

<div class="planes">
<div class="titulo">
  <h1>tenemos los mejores planes para poder comenzar, cotiza con nosotros</h1> 
 </div>


 <div class="contenedor-main">


<div class="wrapper">
  <div class="table basic">
    <div class="price-section">
      <div class="price-area">
        <div class="inner-area">
          <span class="text">$</span>
          <span class="price">120.000</span>
        </div>
      </div>
    </div>
    <div class="package-name"></div>
    <ul class="features">
      <li>
        <span class="list-name">Tu sitio web con tu información requerida y formulario de contacto con notificaciones directa a tu correo electrónico</span>
         <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
      <li>
        <span class="list-name">5 secciones para tu sitio con contenidos que tú quieras</span>
         <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
      <li>
        <span class="list-name">Tu sitio será administrable desde un CMD que será instalados en tu web </span>
         <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
      <li>
        <span class="list-name">Asesoría por nosotros para que tu sitio sea lo más óptimo para que lo puedas controlar</span>
         <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
      <li>
        <span class="list-name">Hosting y dominio entregados que incluyen con el plan </span>
         <span class="icon check"><i class="fas fa-check"></i></span>
      </li>

      <li>
        <span class="list-name">Optimizado para SEO</span>
         <span class="icon check"><i class="fas fa-check"></i></span>
      </li>

      
      <li>
        <span class="list-name">Optimizado para todas las pantallas</span>
         <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
    </ul>
    <a class="ir" href="{{route('contacto')}}" class="active">mas info</a>
{{--     <div class="btn"><button>Purchase</button></div> --}}
  </div>
  <div class="table premium">
    <div class="ribbon"><span>Recommended</span></div>
    <div class="price-section">
      <div class="price-area">
        <div class="inner-area">
          <span class="text">$</span>
          <span class="price">170.000</span>
        </div>
      </div>
    </div>
    <div class="package-name"></div>
    <ul class="features">
      <li>
      
        <span class="fa-solid fa-rocket-launch">Entrega de tarjetas de presentación formato .AI (opcional)</span>
        <span <span class="icon check"><i class="fas fa-check"></i></span>
=      <li>
        <span class="list-name">8 secciones para tu sitio web si lo requieres</span>
         <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
      <li>
        <span class="list-name">CMR para administración de tus clientes</span>
         <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
      <li>
        <span class="list-name">Hosting y dominio entregados que están incluidos con el plan</span>
         <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
      <li>
        <span class="list-name">Optimizado para SEO</span>
         <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
      <li>
        <span class="list-name">Asesoría para la administración de contenidos para tu sitio</span>
         <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
      <li>
        <span class="list-name">Seguimiento de tu pagina atravez de google analitic</span>
         <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
      <li>
        <span class="list-name">candado de seguridad</span>
         <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
      <li>
        <span class="list-name">optimizado para todas las pantallas</span>
         <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
     
    </ul>

    <a class="ir" href="{{route('contacto')}}" class="active">mas info</a>
   {{--  <div class="btn"><button>Purchase</button></div> --}}
  </div>
  <div class="table ultimate">
    <div class="price-section">
      <div class="price-area">
        <div class="inner-area">
          <span class="text">$</span>
          <span class="price">270.000</span>
        </div>
      </div>
    </div>
    <div class="package-name"></div>
    <ul class="features">
      <li>
        <span class="list-name">Sistema de inventario</span>
        <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
      <li>
        <span class="list-name">Integración de pagos nacionales</span>
        <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
      <li>
        <span class="list-name">Carrito de compras</span>
        <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
      <li>
        <span class="list-name">Formulario de contactos</span>
        <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
      <li>
        <span class="list-name">10 páginas internas</span>
        <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
      <li>
        <span class="list-name">Conexiones a redes sociales</span>
        <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
      <li>
        <span class="list-name">Configuración seguridad SSL</span>
        <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
      <li>
        <span class="list-name">Totalmente administrable</span>
        <span class="icon check"><i class="fas fa-check"></i></span>
      </li>

      <li>
        <span class="list-name">Optimizado para SEO</span>
        <span class="icon check"><i class="fas fa-check"></i></span>
      </li>
    </ul>
    <div class="btn">
      <a class="ir" href="{{route('contacto')}}" class="active">mas info</a>
      {{-- <button>Purchase
        </button> --}}
      </div>
  </div>
</div>

</div> 
</div>






  @endsection