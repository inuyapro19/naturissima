<!-- Nombre Empresa Field -->
<div class="form-group col-sm-8">
    {!! Form::label('nombre_empresa', 'Nombre Empresa:') !!}
    {!! Form::text('nombre_empresa', null, ['class' => 'form-control']) !!}
    <small class="help-block">Ingrese el Nombre de la Empresa</small>
</div>

<!-- Email Field -->
<div class="form-group col-sm-8">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::text('email', null, ['class' => 'form-control']) !!}
    <small class="help-block">Ingrese el Correo Electronico</small>
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-8">
    {!! Form::label('direccion', 'Dirección:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefono1 Field -->
<div class="form-group col-sm-8">
    {!! Form::label('telefono1', 'Teléfono #1:') !!}
    {!! Form::text('telefono1', null, ['class' => 'form-control']) !!}
    <small class="help-block">Ejemplo: +56 9 9999 9999</small>
</div>

<!-- Telefono2 Field -->
<div class="form-group col-sm-8">
    {!! Form::label('telefono2', 'Teléfono #2:') !!}
    {!! Form::text('telefono2', null, ['class' => 'form-control']) !!}
    <small class="help-block">Ejemplo: +56 9 9999 9999</small>
</div>

<!-- Nombre Facebook Field -->
<div class="form-group col-sm-8">
    {!! Form::label('nombre_facebook', 'Nombre Facebook:') !!}
    {!! Form::text('nombre_facebook', null, ['class' => 'form-control']) !!}
    <small class="help-block">Ingrese el Nombre del facebook ej: Naturissima - Come bien, vive mejor</small>
</div>

<!-- Url Facebook Field -->
<div class="form-group col-sm-8">
    {!! Form::label('url_facebook', 'Url Facebook:') !!}
    {!! Form::text('url_facebook', null, ['class' => 'form-control']) !!}
    <small class="help-block">Ejemplo: http://www.facebook.com/</small>
</div>


<!-- Mapa Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('mapa', 'Mapa:') !!}
    {!! Form::textarea('mapa', null, ['class' => 'form-control']) !!}
    <smal class="help-block">Pegue aquÍ el código del mapa Ejemplo: iframe</small>
</div>

<!-- Texto Footer Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('texto_footer', 'Texto Footer:') !!}
    {!! Form::textarea('texto_footer', null, ['class' => 'form-control']) !!}
    <smal class="help-block"> Texto en pie de Página </small>
</div>

<!-- Quienes Somos Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('quienes_somos', 'Quiénes Somos:') !!}
    {!! Form::textarea('quienes_somos', null, ['class' => 'form-control','id'=>'quienes_somos']) !!}
</div> 

<!-- Imagen Quienes Somos Field -->
<div class="form-group col-sm-8">
    {!! Form::label('imagen_quienes_somos', 'Imagen Quienes Somos:') !!}
    {!! Form::file('imagen_quienes_somos') !!}
</div>
@if(isset($informacion->imagen_quienes_somos))
<div class="col-sm-6" style="margin-bottom: 10px">
    <img src="{{asset('upload/informacion/'.$informacion->imagen_quienes_somos)}}" class="img-thumbnail" width="100" alt="">
</div>   
@endif 




<!-- Submit Field -->

<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('home') !!}" class="btn btn-default">Volver</a>
</div>
