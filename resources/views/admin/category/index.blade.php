<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
       Todas las categorias<b></b>
         
     
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

                        <div class="card-header">Todas las Categorias</div>


                 <table class="table table-dark">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">nombre de la categoria</th>
                        <th scope="col">usuario</th>
                        <th scope="col">creado</th>
                        <th scope="col">accion</th>
                      </tr>
                    </thead>
                    <tbody>
                     {{--  @php($i = 1) --}}
                      @foreach ($categories as $category )
                          
                    
                      <tr>
                        
                            
                        <th scope="row">{{$categories->firstItem()+$loop->index}}</th>
                        <td>{{$category->category_name}}</td>
                        <td>{{$category->user->name}}</td>
                        <td>
                          @if($category->created_at == NULL)
                          <span class="text-danger">no hay datos en la base de datos</span>
                          @else
                          {{$category->created_at->diffForHumans()}}
                          @endif
                        </td>
                        <td>
                    <a href="{{url('category/edit/'.$category->id)}}" class="btn btn-info">editar</a>
                    <a href="{{url('softdelete/category/'.$category->id)}}" class="btn btn-danger">eliminar</a>
                  </td>
                     
                      </tr>
                      @endforeach

                    </tbody>

           
                  </table>
                  {{$categories->links()}}
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        Agregar Categoria
                    </div>
                    <div class="card-body">

                    

                    <form action="{{route('store.category')}}" method="POST">
                      @csrf
                        <div class="form-group">
                          <label for="email">Nombre de Categoria</label>
                          <input type="text" name="category_name" class="form-control" placeholder="ingrese categoria" id="email">
                          @error('category_name')
                          <span class="text-danger">{{$message}}</span>

                          @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">Agregar Categoria</button>
                      </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
















        <div class="container">
          <div class="row">


              <div class="col-md-8">
                  <div class="card">

        

                      <div class="card-header">Lista de Basura</div>


               <table class="table table-dark">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">nombre de la categoria</th>
                      <th scope="col">usuario</th>
                      <th scope="col">creado</th>
                      <th scope="col">accion</th>
                    </tr>
                  </thead>
                  <tbody>
                   {{--  @php($i = 1) --}}
                    @foreach ($trachCat as $category )
                        
                  
                    <tr>
                      
                          
                      <th scope="row">{{$categories->firstItem()+$loop->index}}</th>
                      <td>{{$category->category_name}}</td>
                      <td>{{$category->user->name}}</td>
                      <td>
                        @if($category->created_at == NULL)
                        <span class="text-danger">no hay datos en la base de datos</span>
                        @else
                        {{$category->created_at->diffForHumans()}}
                        @endif
                      </td>
                      <td>
                  <a href="{{url('category/restore/'.$category->id)}}" class="btn btn-info">restaurar</a>
                  <a href="{{url('pdelete/category/'.$category->id)}}" class="btn btn-danger">eliminar p</a>
                </td>
                   
                    </tr>
                    @endforeach

                  </tbody>

         
                </table>
                {{$trachCat->links()}}
              </div>
          </div>
          <div class="col-md-4">
              


          </div>
          </div>
      </div>
       {{--  FIN DE LA BASURA --}}
    </div>
</x-app-layout>
