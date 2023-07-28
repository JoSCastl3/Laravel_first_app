@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ingresar Productos') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="card col-md-8 mx-auto">
                        <div class="card-body">
                        <form action="{{ route('store')}}" method="post">
                            @csrf
                            <div class="form-group col-sm-8">
                                <label for="nameprod" class="form-label">Nombre del producto</label>
                                <input type="text" class="form-control" id="nameprod" name="nameprod" value="" required />
                            </div>

                            <div class="form-group col-sm-8">
                                <label for="typeprod" class="form-label">Tipo de producto</label>
                                <input type="text" class="form-control" id="typeprod" name="typeprod" value="" required />
                            </div>
                            <div class="form-group col-sm-4">
                                <label for="cantprod" class="form-label">Cantidad</label>
                                <input type="number" class="form-control" id="cantprod" name="cantity" value="" required />
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="form-label" for="costprod">Costo</label>
                                <input step="0.01" type="decimal(9,3)" id="costprod" name="cost" class="form-control" required />
                            </div>
                            <div class="form-group col-sm-4">
                                <label class="form-label" for="precio">Precio de venta</label>
                                <input step="0.01" type="number" id="precio" name="price" class="form-control" required />
                            </div>
                            <div class="form-group float-end">
                               <button type="submit" class="btn btn-success">Guardar</button>
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
    