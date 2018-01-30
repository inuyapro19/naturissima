@extends('layouts.app')
@section('title','Editar Información')
@section('content')
    <section class="content-header">
        <h1>
            Información
        </h1>
   </section>
   <div class="content">
        <div class="clearfix"></div>

        @include('flash::message')

        <div class="clearfix"></div>
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($informacion, ['route' => ['informacions.update', $informacion->id], 'method' => 'patch', 'enctype'=>'multipart/form-data' ]) !!}

                        @include('informacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection

@section('scripts')
  <script src="{{ asset('back/plugins/tinymce/tinymce.min.js') }}"></script>

  <script>tinymce.init({ selector:'#quienes_somos' });</script>
@endsection