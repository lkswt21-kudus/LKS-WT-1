@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col my-auto">Requests</div>
                        <div class="col text-right">
                            <a href="{{ route('requests.create') }}" class="btn btn-primary">Add</a>
                        </div>
                    </div>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Product</th>
                                <th>Quantity</th>
                                <th>Department</th>
                                <th>Supplier</th>
                                @if( Auth::user()->role === 1)
                                    <th>Action</th>
                                @endif
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($reqs as $req)
                                <tr>
                                    <td>{{ $req->id }}</td>
                                    <td>{{ $req->product->name }}</td>
                                    <td>{{ $req->quantity }}</td>
                                    <td>{{ $req->department }}</td>
                                    <td>{{ $req->supplier }}</td>
                                    @if( Auth::user()->role === 1)
                                        <td>
                                            <a href="{{ route('requests.edit', [$req->id]) }}" class="btn btn-warning">Edit</a>
                                            <!-- <form onsubmit="return confirm('Delete ?')" action="{{ route('purchases.destroy', [$req->id]) }}" method="POST" class="custom-control-inline">
                                                @csrf
                                                @method('DELETE')

                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form> -->
                                        </td>
                                    @endif
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
