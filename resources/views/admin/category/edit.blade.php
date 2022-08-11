<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
       Editar categorias<b></b>
         
     
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="container">
            <div class="row">


            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                       editar Categoria
                    </div>
                    <div class="card-body">

                    

                    <form action="{{url('category/update/'.$categories->id)}}" method="POST">
                      @csrf
                        <div class="form-group">
                          <label for="email">actulizar nombre de la Categoria</label>
                          <input type="text" name="category_name" class="form-control" placeholder="ingrese categoria" id="email" value="{{$categories->category_name}}">
                          @error('category_name')
                          <span class="text-danger">{{$message}}</span>

                          @enderror
                        </div>
                        
                        <button type="submit" class="btn btn-primary">actualizar Categoria</button>
                      </form>
                    </div>
                </div>
            </div>
            </div>
        </div>
        
    </div>
</x-app-layout>
