@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
<!-- Default form register -->
        <form class="text-center border border-light p-5" method="POST" action="{{route('teniente.update', $teniente->id)}}">
            @csrf
            @method('PUT')
    <p class="h4 mb-4">Editar Teniente</p>

    <!-- E-mail -->
    <input type="text" class="form-control mb-4" name="nombre" placeholder="Nombre" value="{{$teniente->nombre}}">

    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">editar</button>

</form>
        </div>


        <div class="col-md-8">
            <form class="text-center border border-light p-5" method="POST" action="{{route('teniente.destroy', $teniente->id)}}">
                @csrf
                @method('DELETE')
            <!-- Sign up button -->
            <button class="btn btn-danger my-4 btn-block" type="submit">eliminar</button>
            
            </form>
        
        </div>




    </div>
</div>
@endsection