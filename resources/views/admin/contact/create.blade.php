@extends('admin.admin_master'){{-- extension --}}

@section('admin'){{-- agregando el diseño --}}
<div class="col-lg-12">
<div class="card card-default">
			<div class="card-header card-header-border-bottom">
				<h2>Crear Contacto</h2>
			</div>

			<div class="card-body">
				<form action="{{route('store.contact')}}" method="POST" >
					@csrf
					<div class="form-group">
						<label for="exampleFormControlInput1">Email del Contacto</label>
						<input type="email" name="email" class="form-control" id="exampleFormControlInput1" placeholder="email">
						
					</div>
                    <div class="form-group">
						<label for="exampleFormControlInput1">Telefono del Contacto</label>
						<input type="text" name="phone" class="form-control" id="exampleFormControlInput1" placeholder="Telefono">
						
					</div>
                    <div class="form-group">
						<label for="exampleFormControlInput1">Direccion del Contacto</label>
						<input type="text" name="address" class="form-control" id="exampleFormControlInput1" placeholder="Direccion">
						
					</div>

				 <div class="form-footer pt-5 mt-4 border-top">
						<button type="submit" class="btn btn-primary btn-default">Enviar</button>
						
					</div>
				</form>
			</div>
		</div>

		

    </div>
@endsection
