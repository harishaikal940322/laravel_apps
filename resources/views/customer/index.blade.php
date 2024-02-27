@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <form action="">
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
        </div>
    </div>
@endsection
