@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
<form action="">  
    <div class="col">
        <input type="text" class="form-control mb-4" name="nombre" placeholder="Nombre" value="">
    </div>

    <div class="col">
        <select id="cantidad" class="custom-select" name="cantidad">
            <option selected>Cantidad</option>
            @foreach($coleccion as $item)
                <option value="{{$item->id}}"> {{$item->nombre}} </option>
            @endforeach
          </select>
    </div>

    <div class="col mt-4">
        <select id="orden" class="custom-select custom-select-sm js-example-basic-single" name="orden" style="height: 38px">
            @foreach($coleccion as $item)
            <option value="{{$item->id}}"> {{$item->nombre}} </option>
            @endforeach
          </select>
    </div>  

    <div class="col mt-4">
        <button class="btn btn-primary btn-md my-2 my-sm-0 ml-3" type="submit">Enviar</button>
    </div>  
</form>


               </div>

            </div>
        </div>
    </div>
</div>

@endsection