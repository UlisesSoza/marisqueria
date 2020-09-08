@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/viajes') }}">Viaje</a> :
@endsection
@section("contentheader_description", $viaje->$view_col)
@section("section", "Viajes")
@section("section_url", url(config('laraadmin.adminRoute') . '/viajes'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Viajes Edit : ".$viaje->$view_col)

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
				{!! Form::model($viaje, ['route' => [config('laraadmin.adminRoute') . '.viajes.update', $viaje->id ], 'method'=>'PUT', 'id' => 'viaje-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'partida')
					@la_input($module, 'llegada')
					@la_input($module, 'capitan')
					@la_input($module, 'producto')
					@la_input($module, 'lancha')
					@la_input($module, 'gasto')
					@la_input($module, 'marinos')
					@la_input($module, 'comision')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/viajes') }}">Cancel</a></button>
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
	$("#viaje-edit-form").validate({
		
	});
});
</script>
@endpush
