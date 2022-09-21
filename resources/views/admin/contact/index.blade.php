@extends('admin.admin_master'){{-- extension --}}

@section('admin'){{-- agregando el diseño --}}

    <div class="py-12">
        <div class="container">
            <div class="row">
<h4>Seccion de contactos</h4>
<a href="{{route('add.contact')}}"><button class="btn btn-info">agregar contacto</button></a>
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
                        <th scope="col" with="5%">Sl</th>
                        <th scope="col" with="15%">Direccion del contacto</th>
                        <th scope="col" with="25%">Correo del Contacto</th>
                        <th scope="col" with="15%">Numero del Contacto</th>
                        <th scope="col" with="15%">Accion</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                     {{--  @php($i = 1) --}}
                     @php($i = 1)
                      @foreach ($contacts as $con ) 
                          
                    
                      <tr>
                        
                            
                       {{--  <th scope="row">{{$brands->firstItem()+$loop->index}}</th> --}}
                      <th scope="row">{{$i++}}</th>
                        <td>{{$con->address}}</td>
                        <td>{{$con->email}}</td> 
                        <td>{{$con->phone}}</td> 
                        
                        <td>
                   <a href="{{url('contact/edit/'.$con->id)}}" class="btn btn-info">editar</a>
                    <a href="{{url('contact/delete/'.$con->id)}}" onclick="return confirm('estas seguro que quieres eliminarlo')" class="btn btn-danger">eliminar</a>
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
