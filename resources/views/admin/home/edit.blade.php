@extends('admin.admin_master'){{-- extension --}}

@section('admin'){{-- agregando el diseño --}}
<div class="col-lg-12">
<div class="card card-default">
			<div class="card-header card-header-border-bottom">
				<h2>Crear Acerca de Nosotros</h2>
			</div>

			<div class="card-body">
				<form action="{{url('update/homeabout/'.$homeabout->id)}}" method="POST" >
					@csrf
					<div class="form-group">
						<label for="exampleFormControlInput1">Titulo de Acerca de Nostros</label>
						<input type="text" name="title" class="form-control" id="exampleFormControlInput1" value="{{$homeabout->title}}">
						
					</div>

					

					
					

					<div class="form-group">
						<label for="exampleFormControlTextarea1">Descripcion de acerca de nosotros</label>
						<textarea name="long_dist" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$homeabout->long_dist}}</textarea>
					</div>

				

					<div class="form-footer pt-5 mt-4 border-top">
						<button type="submit" class="btn btn-primary btn-default">Submit</button>
						
					</div>
				</form>
			</div>
		</div>

		

    </div>
@endsection
