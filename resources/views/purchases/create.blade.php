@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col my-auto">Create Purchase</div>
                        <!-- <div class="col text-right">
                            <a href="{{ route('users.create') }}" class="btn btn-primary">Add</a>
                        </div> -->
                    </div>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('purchases.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="product" class="col-md-4 col-form-label text-md-right">Product</label>

                            <div class="col-md-6">
                                <!-- <input id="product" type="text" class="form-control" name="product" value="" required> -->
                                <select name="product" id="product" class="form-control" required>
                                    @foreach($products as $product)
                                        <option value="{{ $product->id }}">{{ $product->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="date" class="col-md-4 col-form-label text-md-right">Date</label>

                            <div class="col-md-6">
                                <input id="date" type="date" class="form-control" name="date" value="" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">Quantity</label>

                            <div class="col-md-6">
                                <input id="quantity" type="number" class="form-control" name="quantity" value="" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="supplier" class="col-md-4 col-form-label text-md-right">Supplier</label>

                            <div class="col-md-6">
                                <input id="supplier" type="text" class="form-control" name="supplier" value="" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="no_invoice" class="col-md-4 col-form-label text-md-right">No Invoice</label>

                            <div class="col-md-6">
                                <input id="no_invoice" type="number" class="form-control" name="no_invoice" value="" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
