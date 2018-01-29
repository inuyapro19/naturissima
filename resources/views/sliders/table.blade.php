<table class="table table-responsive" id="sliders-table">
    <thead>
        <tr>
            <th></th>
            <th>#</th>
            <th>Título</th>
            <th>Subtítulo</th>
            <th>Imagen</th>
            <th colspan="3">Acciónes</th>
        </tr>
    </thead>
    <tbody>
    @foreach($sliders as $slider)
        <tr>
            <td></td>
            <td>{!! $slider->id !!}</td>
            <td>{!! $slider->titulo !!}</td>
            <td>{!! $slider->subtitulo !!}</td>
            <td><img src="{{asset('upload/slider/'.$slider->imagen)}}" width="150" alt=""></td>
            <td>
                {!! Form::open(['route' => ['sliders.destroy', $slider->id], 'method' => 'delete']) !!}
                <div class='btn-group'>
                    
                    <a href="{!! route('sliders.edit', [$slider->id]) !!}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                    {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('¿Desea Eliminar Slider?')"]) !!}
                </div>
                {!! Form::close() !!}
            </td>
        </tr>
    @endforeach
    </tbody>
</table>