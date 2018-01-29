@extends('layouts.app')
@section('title','Inicio')
@section('content')
<div class="container">
    <div class="row">
		
		<h1>Bienvenido {{ ucwords(Auth::user()->name) }}</h1> 

    </div>
</div>
@endsection
