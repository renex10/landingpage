<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
       Todas las Marcas<b></b>
         
     
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">


                <div class="col-md-8">
                    <div class="card">

           @if(session('success'))
                      <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <button type="button" class="close" data-dismiss="alert">&times;</button>
                        <strong>{{session('success')}}</strong> 
                      </div>
            @endif

                        <div class="card-header">Todas las Marcas</div>


                 <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">nombre de la marca</th>
                        <th scope="col">imagen de la marca</th>
                        <th scope="col">creado</th>
                        <th scope="col">accion</th>
                      </tr>
                    </thead>
                    <tbody>
                     {{--  @php($i = 1) --}}
                      @foreach ($brands as $brand )
                          
                    
                      <tr>
                        
                            
                        <th scope="row">{{$brands->firstItem()+$loop->index}}</th>
                       
                        <td>{{$brand->brand_name}}</td>
                        <td><img src="" alt=""></td>
                        <td>
                          @if($brand->created_at == NULL)
                          <span class="text-danger">no hay datos en la base de datos</span>
                          @else
                          {{$brand->created_at->diffForHumans()}}
                          @endif
                        </td>
                        <td>
                    <a href="{{url('brand/edit/'.$brand->id)}}" class="btn btn-info">editar</a>
                    <a href="{{url('brand/delete/'.$brand->id)}}" class="btn btn-danger">eliminar</a>
                  </td>
                     
                      </tr>
                      @endforeach

                    </tbody>

           
                  </table>
                  {{$brands->links()}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Agregar Marca
                    </div>
                    <div class="card-body">

                    

                    <form action="{{route('store.category')}}" method="POST">
                      @csrf
                      <div class="form-group">
                        <label for="email">Nombre de la marca</label>
                        <input type="text" name="brand_image" class="form-control" placeholder="ingrese la marca" id="email">
                        @error('brand_image')
                        <span class="text-danger">{{$message}}</span>

                        @enderror
                      </div>





                        <div class="form-group">
                          <label for="email">Imagen de la marca</label>
                          <input type="file" name="brand_image" class="form-control"  id="email">
                          @error('brand_image')
                          <span class="text-danger">{{$message}}</span>

                          @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Agregar Marca</button>
                      </form>
                    </div>
                </div>
            </div>
            </div>
        </div>






       {{--  FIN DE LA BASURA --}}
    </div>
</x-app-layout>
