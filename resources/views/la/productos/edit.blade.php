@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/productos') }}">Producto</a> :
@endsection
@section("contentheader_description", $producto->$view_col)
@section("section", "Productos")
@section("section_url", url(config('laraadmin.adminRoute') . '/productos'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Productos Edit : ".$producto->$view_col)

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
				{!! Form::model($producto, ['route' => [config('laraadmin.adminRoute') . '.productos.update', $producto->id ], 'method'=>'PUT', 'id' => 'producto-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'name')
					@la_input($module, 'libras')
					@la_input($module, 'preciomayor')
					@la_input($module, 'preciomenor')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/productos') }}">Cancel</a></button>
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
	$("#producto-edit-form").validate({
		
	});
});
</script>
@endpush
