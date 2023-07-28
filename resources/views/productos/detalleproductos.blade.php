@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ Auth::user()->name }}
                    {{ __(': En esta sección se muestra el detalle de un Producto!') }}
                    <div class="card col-md-8 mx-auto">
                        <div class="card-body">
                        <form action="{{ route('show')}}" method="get">
                            @csrf
                            <div class="form-group col-sm-8">
                                <label for="nameprod" class="form-label">Nombre del producto</label>
                                <input type="text" class="form-control" id="nameprod" name="" value="{{ $product->nameprod }}" required />
                            </div>

                            <div class="form-group col-sm-8">
                                <label for="typeprod" class="form-label">Tipo de producto</label>
                                <input type="text" class="form-control" id="typeprod" name="" value="{{ $product->typeprod }}" required />
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="cantprod" class="form-label">Cantidad</label>
                                <input type="text" class="form-control" id="cantprod" name="" value="{{ $product->cantity }}" required />
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="form-label" for="costprod">Costo</label>
                                <input type="text" id="costprod" name="" value="{{ $product->cost }}" class="form-control" required />
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="form-label" for="precio">Precio de venta</label>
                                <input type="text" id="precio" name="" value="{{ $product->price }}" class="form-control" required />
                            </div>
                            <div class="form-group float-end">
                               <button  type="submit" class="btn btn-success">Regresar</button>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
