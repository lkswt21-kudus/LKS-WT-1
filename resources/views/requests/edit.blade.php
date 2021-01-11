@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col my-auto">Edit Request</div>
                        <!-- <div class="col text-right">
                            <a href="{{ route('users.create') }}" class="btn btn-primary">Add</a>
                        </div> -->
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('requests.update', [$req->id]) }}">
                        @csrf
                        @method('PUT')

                        <div class="form-group row">
                            <label for="product" class="col-md-4 col-form-label text-md-right">Product</label>

                            <div class="col-md-6">
                                <input id="product" type="text" class="form-control" name="product" value="{{ $req->product->name }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">Quantity</label>

                            <div class="col-md-6">
                                <input id="quantity" type="number" class="form-control" name="quantity" value="{{ $req->quantity }}" readonly>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="department" class="col-md-4 col-form-label text-md-right">Department</label>

                            <div class="col-md-6">
                                <input id="department" type="text" class="form-control" name="department" value="{{ $req->department }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="supplier" class="col-md-4 col-form-label text-md-right">Supplier</label>

                            <div class="col-md-6">
                                <input id="supplier" type="text" class="form-control" name="supplier" value="{{ $req->supplier }}" disabled>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="status" class="col-md-4 col-form-label text-md-right">Status</label>

                            <div class="col-md-6">
                                <select name="status" id="status" class="form-control" @if($req->status !== 'Pending') disabled @endif>
                                    <option>Accept</option>
                                    <option>Reject</option>
                                </select>
                            </div>
                        </div>

                        @if($req->status === 'Pending')
                            <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary" @if($req->quantity > $req->product->stock) disabled @endif>
                                        Save
                                    </button>
                                </div>
                            </div>
                        @endif
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
