@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<!-- Default form register -->
        <form class="text-center border border-light p-5" method="POST" action="{{route('teniente.store')}}">
            @csrf
    <p class="h4 mb-4">Registrar Teniente</p>

    <!-- E-mail -->
    <input type="text" class="form-control mb-4" name="nombre" placeholder="Nombre">

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">registrar</button>

</form>
        </div>
    </div>
</div>
@endsection