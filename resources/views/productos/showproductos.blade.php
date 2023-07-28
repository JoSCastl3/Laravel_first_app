@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Productos en Existencia') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="table-responsive mt-3">
                    <table class="table table-striped table-bordered table-hover table-sm">
                            <tr>
                                <th>No</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Cantity</th>
                                <th width="">Action</th>
                            </tr>
                            @foreach ($product as $product)
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $product->nameprod }}</td>
                                <td>{{ $product->typeprod }}</td>
                                <td>{{ $product->cantity }}</td>

                                <td>
                                    <form action="{{ route('destroy',$product->id) }}" method="POST">
                                        <a class="btn btn-outline-primary btn-sm" href="{{ route('details',$product->id) }}">Detalles</a>
                                        <a class="btn btn-outline-success btn-sm" href="{{ route('edit',$product->id) }}">Edit</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
