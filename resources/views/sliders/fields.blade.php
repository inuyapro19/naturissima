<!-- Titulo Field -->
<div class="form-group col-sm-8">
    {!! Form::label('titulo', 'Título:') !!}
    {!! Form::text('titulo', null, ['class' => 'form-control']) !!}
</div>

<!-- Subtitulo Field -->
<div class="form-group col-sm-8">
    {!! Form::label('subtitulo', 'Subtítulo:') !!}
    {!! Form::text('subtitulo', null, ['class' => 'form-control']) !!}
</div>
<div class="row">
	<!-- Imagen Field -->

<div class="form-group col-sm-8">
	@if(isset($slider))

<div class=" col-sm-2">
	<img src="{{asset('upload/slider/'.$slider->imagen)}}" width="100" class="img-thumbnail" alt="">
</div>
@endif
<div class="col-md-8">
	 {!! Form::label('imagen', 'Imagen:') !!}
    {!! Form::file('imagen') !!}
</div>
   
</div>

</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('sliders.index') !!}" class="btn btn-default">Volver</a>
</div>
