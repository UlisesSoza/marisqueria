@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/rutas') }}">Ruta</a> :
@endsection
@section("contentheader_description", $ruta->$view_col)
@section("section", "Rutas")
@section("section_url", url(config('laraadmin.adminRoute') . '/rutas'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Rutas Edit : ".$ruta->$view_col)

@section("main-content")

@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="box">
	<div class="box-header">
		
	</div>
	<div class="box-body">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				{!! Form::model($ruta, ['route' => [config('laraadmin.adminRoute') . '.rutas.update', $ruta->id ], 'method'=>'PUT', 'id' => 'ruta-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'nombre')
					@la_input($module, 'lat')
					@la_input($module, 'lon')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/rutas') }}">Cancel</a></button>
					</div>
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>

@endsection

@push('scripts')
<script>
$(function () {
	$("#ruta-edit-form").validate({
		
	});
});
</script>
@endpush
