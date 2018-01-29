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

<!-- Telefono1 Field -->
<div class="form-group col-sm-8">
    {!! Form::label('telefono1', 'Teléfono1:') !!}
    {!! Form::text('telefono1', null, ['class' => 'form-control']) !!}
    <small class="help-block">Ingrese el Su Numero de teléfono sin el +56</small>
</div>

<!-- Telefono2 Field -->
<div class="form-group col-sm-8">
    {!! Form::label('telefono2', 'Teléfono2:') !!}
    {!! Form::text('telefono2', null, ['class' => 'form-control']) !!}
    <small class="help-block">Ingrese el Su Numero de teléfono sin el +56</small>
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
</div>

<!-- Direccion Field -->
<div class="form-group col-sm-8">
    {!! Form::label('direccion', 'Direccion:') !!}
    {!! Form::text('direccion', null, ['class' => 'form-control']) !!}
</div>

<!-- Mapa Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('mapa', 'Mapa:') !!}
    {!! Form::textarea('mapa', null, ['class' => 'form-control']) !!}
</div>

<!-- Texto Footer Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('texto_footer', 'Texto Footer:') !!}
    {!! Form::textarea('texto_footer', null, ['class' => 'form-control']) !!}
</div>

<!-- Quienes Somos Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('quienes_somos', 'Quienes Somos:') !!}
    {!! Form::textarea('quienes_somos', null, ['class' => 'form-control']) !!}
</div>

<!-- Imagen Quienes Somos Field -->
<div class="form-group col-sm-8">
    {!! Form::label('imagen_quienes_somos', 'Imagen Quienes Somos:') !!}
    {!! Form::file('imagen_quienes_somos') !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('home') !!}" class="btn btn-default">Volver</a>
</div>
