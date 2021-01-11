@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col my-auto">Purchases</div>
                        <div class="col text-right">
                            <a href="{{ route('purchases.create') }}" class="btn btn-primary">Add</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>Date</th>
                                <th>Quantity</th>
                                <th>Supplier</th>
                                <th>No Invoice</th>
                                <!-- <th>Action</th> -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($purchases as $purchase)
                                <tr>
                                    <td>{{ $purchase->product->name }}</td>
                                    <td>{{ $purchase->date }}</td>
                                    <td>{{ $purchase->quantity }}</td>
                                    <td>{{ $purchase->supplier }}</td>
                                    <td>{{ $purchase->no_invoice }}</td>
                                    <td>
                                        <!-- <a href="{{ route('products.edit', [$purchase->id]) }}" class="btn btn-warning">Edit</a> -->
                                        <!-- <form onsubmit="return confirm('Delete ?')" action="{{ route('purchases.destroy', [$purchase->id]) }}" method="POST" class="custom-control-inline">
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
