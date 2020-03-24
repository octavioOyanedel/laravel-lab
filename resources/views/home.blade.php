@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Home</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>{{session('status')}}</strong> You should check in on some of those fields below.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                                   
                <nav class="navbar navbar-dark default-color">
                    <form class="form-inline my-2 my-lg-0 ml-auto" method="GET" action="{{ route('home') }}">

                        <input class="form-control" type="search" name="campo">

                        <input class="form-control" type="hidden" name="page" value="{{ Request()->page }}">

                        <button id="buscar" class="btn btn-outline-white btn-md my-2 my-sm-0 ml-3" type="submit">Buscar</button>
                    </form>
                </nav>
                
                <div class="table-responsive p-3">

                    <x-tabla :coleccion="$coleccion" :cabeceras="$cabeceras" :ruta="$ruta_include_tabla"/>
  
                    {{ $coleccion->links() }}

                </div>

            </div>

            </div>
        </div>
    </div>
</div>

@endsection
