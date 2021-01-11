@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col my-auto">Products</div>
                        <div class="col text-right">
                            <a href="{{ route('products.create') }}" class="btn btn-primary">Add</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Department</th>
                                <th>Name</th>
                                <th>Stock</th>
                                <th>Jenis</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{ $product->department }}</td>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ $product->stock }}</td>
                                    <td>{{ $product->jenis }}</td>
                                    <td>
                                        <a href="{{ route('products.edit', [$product->id]) }}" class="btn btn-warning">Edit</a>
                                        <!-- <form onsubmit="return confirm('Delete ?')" action="{{ route('products.destroy', [$product->id]) }}" method="POST" class="custom-control-inline">
                                            @csrf
                                            @method('DELETE')

                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form> -->
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
