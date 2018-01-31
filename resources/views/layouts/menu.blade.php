<li class="{{ Request::is('admin/home*') ? 'active' : '' }}">
    <a href="{!! route('home') !!}"><i class="fa fa-home"></i><span>Inicio</span></a>
</li>

<li class="{{ Request::is('admin/sliders*') ? 'active' : '' }}">
    <a href="{!! route('sliders.index') !!}"><i class="fa fa-edit"></i><span>Slider</span></a>
</li>

<li class="{{ Request::is('admin/informacions*') ? 'active' : '' }}">
    <a href="{!! route('informacions.edit',1) !!}"><i class="fa fa-address-book"></i><span>Información</span></a>
</li>

