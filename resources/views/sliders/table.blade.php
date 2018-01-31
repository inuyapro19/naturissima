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
    <tbody class="sortable" data-entityname="sliders">
                @foreach($sliders as $slider)
                <tr data-itemId="{{{ $slider->id }}}">
                    <td class="sortable-handle"><span class="glyphicon glyphicon-sort"></span></td>
                    <td class="id-column">{{$slider->id}}</td>
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