@extends('admin.admin_master'){{-- extension --}}

@section('admin'){{-- agregando el diseño --}}

    <div class="py-12">
        <div class="container">
            <div class="row">
<h4>Seccion Slider</h4>
<a href="{{route('add.slider')}}"><button class="btn btn-info">agregar slider</button></a>
<br><br>
                <div class="col-md-12">
                    <div class="card">

           @if(session('success'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>{{session('success')}}</strong> 
                      </div>
            @endif

                        <div class="card-header">Todas los Slider</div>


                 <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Titulo del Slides</th>
                        <th scope="col">Descripcion</th>
                        <th scope="col">Image</th>
                        <th scope="col">accion</th>
                      </tr>
                    </thead>
                    <tbody>
                     {{--  @php($i = 1) --}}
                      @foreach ($sliders as $slider )
                          
                    
                      <tr>
                        
                            
                       {{--  <th scope="row">{{$brands->firstItem()+$loop->index}}</th> --}}
                       
                        <td>{{$slider->title}}</td>
                        <td>{{$slider->description}}</td>
                        <td><img src="{{asset($slider->image)}}" style="height: 40px; width:70px" ></td>
                        
                        <td>
                    <a href="{{url('slider/edit/'.$slider->id)}}" class="btn btn-info">editar</a>
                    <a href="{{url('slider/delete/'.$slider->id)}}" onclick="return confirm('estas seguro que quieres eliminarlo')" class="btn btn-danger">eliminar</a>
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
