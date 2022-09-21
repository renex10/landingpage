@extends('admin.admin_master'){{-- extension --}}

@section('admin'){{-- agregando el diseño --}}

    <div class="py-12">
        <div class="container">
            <div class="row">
<h4>Aministrador de Mensajes</h4>

<br><br>
                <div class="col-md-12">
                    <div class="card">


                        <div class="card-header">Todos los mensajes</div>


                 <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col" with="5%">Sl</th>
                        <th scope="col" with="15%">Nombre</th>
                        <th scope="col" with="25%">Email</th>
                        <th scope="col" with="15%">Asunto</th>
                        <th scope="col" with="15%">Mensaje</th>
                        <th scope="col" with="15%">Accion</th>
                       
                      </tr>
                    </thead>
                    <tbody>
                     {{--  @php($i = 1) --}}
                     @php($i = 1)
                      @foreach ($messages as $mess ) 
                          
                    
                      <tr>
                        
                            
                       {{--  <th scope="row">{{$brands->firstItem()+$loop->index}}</th> --}}
                      <th scope="row">{{$i++}}</th>
                        <td>{{$mess->name}}</td>
                        <td>{{$mess->email}}</td> 
                        <td>{{$mess->subject}}</td> 
                        <td>{{$mess->message}}</td> 
                        
                        <td>
                  
                    <a href="{{url('message/delete/'.$mess->id)}}" onclick="return confirm('estas seguro que quieres eliminarlo')" class="btn btn-danger">eliminar</a>
                  </td>
                  
                      </tr>
                      
                     @endforeach 

                  

                     

                    </tbody>

           
                  </table>
                  <div>
                    {{$messages->onEachSide(4)->links()}} 
                    </div>
                </div>

              
            </div>
           
            </div>
        </div>






       {{--  FIN DE LA BASURA --}}
    </div>
@endsection
