@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form action="{{ route('transaction.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="card-header">
                            <h4>Customer Transaction</h4>
                        </div>
                        <div class="card-body">
                            <div class="row pb-4">
                                <label class="label" for="name">Invoice</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="invoice" placeholder="Customer Name">
                                </div>
                            </div>
                            <div class="row">
                                <label class="label" for="address">Customer ID</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="id" placeholder="Customer ID">
                                </div>
                            </div>
                        </div>
                        <div class="card-footer" style="text-align: center">
                            <input type="submit" class="btn btn-primary" value="SUBMIT">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
