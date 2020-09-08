@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/gastos') }}">Gasto</a> :
@endsection
@section("contentheader_description", $gasto->$view_col)
@section("section", "Gastos")
@section("section_url", url(config('laraadmin.adminRoute') . '/gastos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Gastos Edit : ".$gasto->$view_col)

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
				{!! Form::model($gasto, ['route' => [config('laraadmin.adminRoute') . '.gastos.update', $gasto->id ], 'method'=>'PUT', 'id' => 'gasto-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'designacion')
					@la_input($module, 'cantidad')
					@la_input($module, 'monto')
					@la_input($module, 'proveedor')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/gastos') }}">Cancel</a></button>
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
	$("#gasto-edit-form").validate({
		
	});
});
</script>
@endpush
