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
                                    <input class="form-control" type="text" name="invoice" placeholder="Invoice Code">
                                </div>
                            </div>
                            <div class="row">
                                <label class="label" for="address">Customer ID</label>
                                <div class="col-md-8">
                                    <select name="id" id="" class="form-control">
                                        @foreach ($q2 as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
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
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h3>List Of Transaction</h3>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td>#</td>
                                    <td>Customer ID</td>
                                    <td>Invoice</td>
                                    <td>Action</td>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($q as $index => $row)
                                    <tr>
                                        <td>{{ ++$index }}</td>
                                        <td>{{ $row->custName->name }}</td>
                                        <td>{{ $row->invoice }}</td>
                                        <td></td>
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
