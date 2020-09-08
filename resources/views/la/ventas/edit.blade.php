@extends("la.layouts.app")

@section("contentheader_title")
	<a href="{{ url(config('laraadmin.adminRoute') . '/ventas') }}">Venta</a> :
@endsection
@section("contentheader_description", $venta->$view_col)
@section("section", "Ventas")
@section("section_url", url(config('laraadmin.adminRoute') . '/ventas'))
@section("sub_section", "Edit")

@section("htmlheader_title", "Ventas Edit : ".$venta->$view_col)

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
				{!! Form::model($venta, ['route' => [config('laraadmin.adminRoute') . '.ventas.update', $venta->id ], 'method'=>'PUT', 'id' => 'venta-edit-form']) !!}
					@la_form($module)
					
					{{--
					@la_input($module, 'fecha')
					@la_input($module, 'productos')
					@la_input($module, 'mayorista')
					@la_input($module, 'cliente')
					--}}
                    <br>
					<div class="form-group">
						{!! Form::submit( 'Update', ['class'=>'btn btn-success']) !!} <button class="btn btn-default pull-right"><a href="{{ url(config('laraadmin.adminRoute') . '/ventas') }}">Cancel</a></button>
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
	$("#venta-edit-form").validate({
		
	});
});
</script>
@endpush
