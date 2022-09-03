@extends('admin.admin_master'){{-- extension --}}

@section('admin'){{-- agregando el diseño --}}
<div class="col-lg-12">
<div class="card card-default">
			<div class="card-header card-header-border-bottom">
				<h2>Crear Acerca de Nosotros</h2>
			</div>

			<div class="card-body">
				<form action="{{route('store.slider')}}" method="POST" enctype="multipart/form-data">
					@csrf
					<div class="form-group">
						<label for="exampleFormControlInput1">Titulo del slider</label>
						<input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Titulo del Slider">
						
					</div>

					

					
					

					<div class="form-group">
						<label for="exampleFormControlTextarea1">Descripcion del Slider</label>
						<textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>

					<div class="form-group">
						<label for="exampleFormControlFile1">imagen del Slider</label>
						<input type="file" name="image" class="form-control-file" id="exampleFormControlFile1">
					</div>

					<div class="form-footer pt-4 pt-5 mt-4 border-top">
						<button type="submit" class="btn btn-primary btn-default">Submit</button>
						
					</div>
				</form>
			</div>
		</div>

		

    </div>
@endsection
