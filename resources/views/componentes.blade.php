@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <x-input :nombre="$nombre" name="nombre" />
                    <x-select />
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
