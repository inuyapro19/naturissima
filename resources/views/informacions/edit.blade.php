@extends('layouts.app')
@section('title','Editar Informacion')
@section('content')
    <section class="content-header">
        <h1>
            Informacion
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
                   {!! Form::model($informacion, ['route' => ['informacions.update', $informacion->id], 'method' => 'patch']) !!}

                        @include('informacions.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection