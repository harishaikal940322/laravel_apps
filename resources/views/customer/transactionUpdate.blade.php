@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form action="{{ route('transaction.update', $id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-header">
                            <h4>Customer Transaction</h4>
                        </div>
                        <div class="card-body">
                            <div class="row pb-4">
                                <label class="label" for="name">Invoice</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="invoice"
                                        value="{{ $transaction->invoice }}" placeholder="Invoice Code">
                                </div>
                            </div>
                            <div class="row">
                                <label class="label" for="address">Customer ID</label>
                                <div class="col-md-8">
                                    <select name="id" id="" class="form-control">
                                        @foreach ($customer as $item)
                                            <option {{ $item->id == $transaction->customer_id ? 'selected' : '' }}
                                                value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
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
