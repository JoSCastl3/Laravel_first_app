@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Panel Principal') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Bienvenido ') }} {{ Auth::user()->name }}

                    <div class="row mt-4">
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Inventario</h5>
                                <p class="card-text">Revisar existencias de Inventario.</p>
                                <a href="{{ route('show') }}" class="btn btn-primary">Ver Inventario</a>
                            </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Agregar Productos</h5>
                                <p class="card-text">Agrega nuevos productos al inventario.</p>
                                <a href="{{ route('create') }}" class="btn btn-success">Agregar</a>
                            </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection


