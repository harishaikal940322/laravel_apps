@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 pb-4">
                <div class="card">
                    <form action="{{ route('customer.store') }}" method="POST">
                        @csrf
                        @method('POST')
                        <div class="card-header">
                            <h4>Customer Form</h4>
                        </div>
                        <div class="card-body">
                            <div class="row pb-4">
                                <label class="label" for="name">Name</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="name" placeholder="Customer Name">
                                </div>
                            </div>
                            <div class="row">
                                <label class="label" for="address">Address</label>
                                <div class="col-md-8">
                                    <input class="form-control" type="text" name="address1" placeholder="Address 1">
                                    <input class="form-control" type="text" name="address2" placeholder="Address 2">
                                    <input class="form-control" type="text" name="address3" placeholder="Address 3">
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
                        <h3>List Of Customer</h3>

                    </div>
                    <div class="card-body">
                        <table class="table table-hover table-bordered">
                            <thead>
                                <tr>
                                    <th style="text-align: center">#</th>
                                    <th style="text-align: center">Customer</th>
                                    <th style="text-align: center">Address 1</th>
                                    <th style="text-align: center">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($q as $index => $row)
                                    <tr>
                                        <td style="text-align: center">{{ ++$index }}</td>
                                        <td>{{ $row->name }}</td>
                                        <td>{{ $row->address1 }}</td>
                                        <td>
                                            <form action="{{ route('customer.destroy', $row->id) }}" method="post">
                                                @method('delete')
                                                @csrf
                                                <input type="submit" class="btn btn-danger btn-sm" value="DELETE">
                                            </form>
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
