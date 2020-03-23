@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
<!-- Default form register -->
        <form class="text-center border border-light p-5" method="POST" action="{{route('clase.store')}}">
            @csrf
    <p class="h4 mb-4">Registrar Clase</p>

    <!-- E-mail -->
        <input type="text" class="{{ existeError($errors, 'nombre') }} form-control mb-4" name="nombre" placeholder="Nombre" value="{{ old('nombre') }}">

    @error('nombre')
        <div class="alert alert-danger">{{ $message }}</div>
    @enderror     

   <!-- Password -->
    <input type="text" class="{{ existeError($errors, 'rango') }} form-control mb-4" name="rango" placeholder="Rango" value="{{ old('rango') }}">
    @error('rango')
        <span class="text-danger text-center">{{ $message }}</span>
    @enderror   

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">registrar</button>

</form>
<!-- /resources/views/post/create.blade.php -->
{{ testDesdeMisMetodos() }}



@if ($errors->any())

<h1>Errores de Validación</h1>
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<!-- Create Post Form -->
        </div>
    </div>
</div>
@endsection

