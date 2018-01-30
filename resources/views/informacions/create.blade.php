@extends('layouts.app')
@section('title','Agregar Información')
@section('content')
    <section class="content-header">
        <h1>
            Información
        </h1>
    </section>
    <div class="content">
        @include('adminlte-templates::common.errors')
        <div class="box box-primary">

            <div class="box-body">
                <div class="row">
                    {!! Form::open(['route' => 'informacions.store']) !!}

                        @include('informacions.fields')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection
