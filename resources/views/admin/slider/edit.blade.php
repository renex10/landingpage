@extends('admin.admin_master')
@section('admin')
    
    @if(session('sucess'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert">&times;</button>
      <strong>{{session('success')}}</strong> 
    </div>
@endif

    <div class="py-12">
        <div class="container">
            <div class="row">


            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                       editar Slider
                    </div>
                    <div class="card-body">



                    

                    <form action="{{url('slider/update/'.$sliders->id)}}" method="POST" enctype="multipart/form-data">
                      @csrf

                      <input type="hidden" name="old_image" value="{{$sliders->image}}">
            
        


                        <div class="form-group">
                          <label for="email">actulizar  titulo</label>
                          <input type="text" name="title" class="form-control" placeholder="ingrese nombre" id="email" value="{{$sliders->title}}">
                         
                          @error('title')
                          <span class="text-danger">{{$message}}</span>

                         @enderror
                        </div>


                        <div class="form-group">
                          <label for="email">actulizar Descripcion</label>
                          <input type="text" name="description" class="form-control" placeholder="ingrese nombre" id="email" value="{{$sliders->description}}">
                         
                          @error('description')
                          <span class="text-danger">{{$message}}</span>

                         @enderror
                        </div>


                        <div class="form-group">
                            <label for="email">actulizar imagen de la marca</label>
                            <input type="file" name="image" class="form-control"  id="email" value="{{$sliders->image}}">
                            @error('image')
                            <span class="text-danger">{{$message}}</span>
  
                            @enderror
                          </div>





                          <div class="form-group">
                            <img src="{{asset($sliders->image)}}" style="width:400px;height:200px;">
                          </div>

                          
                        
                        <button type="submit" class="btn btn-primary">actualizar marca</button>
                      </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
    </div>
@endsection
