<table class="table table-responsive" id="informacions-table">
    <thead>
        <tr>
            <th>Nombre Empresa</th>
        <th>Email</th>
        <th>Telefono1</th>
        <th>Telefono2</th>
        <th>Nombre Facebook</th>
        <th>Url Facebook</th>
        <th>Direccion</th>
        <th>Mapa</th>
        <th>Texto Footer</th>
        <th>Quienes Somos</th>
        <th>Imagen Quienes Somos</th>
            <th colspan="3">Action</th>
        </tr>
    </thead>
    <tbody>
    @foreach($informacions as $informacion)
        <tr>
            <td>{!! $informacion->nombre_empresa !!}</td>
            <td>{!! $informacion->email !!}</td>
            <td>{!! $informacion->telefono1 !!}</td>
            <td>{!! $informacion->telefono2 !!}</td>
            <td>{!! $informacion->nombre_facebook !!}</td>
            <td>{!! $informacion->url_facebook !!}</td>
            <td>{!! $informacion->direccion !!}</td>
            <td>{!! $informacion->mapa !!}</td>
            <td>{!! $informacion->texto_footer !!}</td>
            <td>{!! $informacion->quienes_somos !!}</td>
            <td>{!! $informacion->imagen_quienes_somos !!}</td>
            <td>
                {!! Form::open(['route' => ['informacions.destroy', $informacion->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    <a href="{!! route('informacions.show', [$informacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                    <a href="{!! route('informacions.edit', [$informacion->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>