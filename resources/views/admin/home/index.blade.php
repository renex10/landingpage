@extends('admin.admin_master'){{-- extension --}}

@section('admin'){{-- agregando el diseño --}}

    <div class="py-12">
        <div class="container">
            <div class="row">
<h4>Seccion acerca de Nosotros</h4>
<a href="{{route('add.about')}}"><button class="btn btn-info">agregar Acerca de Nosotros</button></a>
<br><br>
                <div class="col-md-12">
                    <div class="card">

           @if(session('success'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>{{session('success')}}</strong> 
                      </div>
            @endif

                        <div class="card-header">Todas de Acerca de Nosotros</div>


                 <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col" with="5%">#</th>
                        <th scope="col" with="15%">Titulo</th>
                        <th scope="col" with="25%">Descripcion</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                     {{--  @php($i = 1) --}}
                      @php($i = 1)
                      @foreach ($homeabout as $about )
                          
                    
                      <tr>
                        
                            
                       {{--  <th scope="row">{{$brands->firstItem()+$loop->index}}</th> --}}
                        <th scope="row">{{$i++}}</th>
                        <td>{{$about->title}}</td>
                        <td>{{$about->long_dist}}</td>
                        
                        <td>
                    <a href="{{url('about/edit/'.$about->id)}}" class="btn btn-info">editar</a>
                    <a href="{{url('about/delete/'.$about->id)}}" onclick="return confirm('estas seguro que quieres eliminarlo')" class="btn btn-danger">eliminar</a>
                  </td>
                     
                      </tr>
                      @endforeach

                    </tbody>

           
                  </table>
               
                </div>
            </div>
           
            </div>
        </div>






       {{--  FIN DE LA BASURA --}}
    </div>
@endsection
