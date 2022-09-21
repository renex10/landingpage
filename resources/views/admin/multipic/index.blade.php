@extends('admin.admin_master'){{-- extension --}}

@section('admin'){{-- agregando el diseño --}}

    <div class="py-12">
        <div class="container">
            <div class="row">


            <div class="col-md-8">
                
                <div class="card-group">
        
                    @foreach ($images as $multi)
                        <div class="col-md-4 mt-5">
                            <div class="card">
                                <img src="{{asset($multi->image)}}" alt="">
                            </div>

                        </div>
                    @endforeach

                    
                </div>
                {{$images->onEachSide(4)->links()}} 
         
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Multiples Fotos
                    </div>
                    <div class="card-body">

                    <form action="{{route('store.image')}}" method="POST" enctype="multipart/form-data">
                      @csrf
                     

                 <div class="form-group">
                          <label for="email">Multi Imagenes</label>
                          <input type="file" name="image[]" class="form-control"  id="email" multiple="">
                          @error('image')
                          <span class="text-danger">{{$message}}</span>

                          @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Agregar Imagenes</button>
                      </form>
                    </div>
                </div>
            </div>
            </div>
        </div>






       {{--  FIN DE LA BASURA --}}
    </div>
    @endsection

