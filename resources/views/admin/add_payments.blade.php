@extends('admin.layout')
@section('container')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Payments</title>
</head>
<body>
    <div class="container" >
        <form action="{{ Route('add_payments') }}" method="POST">
            @csrf
            {{-- INPUT BOX CREATION --}}
            <div class="row" style="display: flex; padding: 10px; margin-top: 50px">
                <div class="col-sm-12 col-md-4 form-group" style="padding: 10px;">
                    <input type="text" value="{{ $officer_name }}" name="officer_name" class="form-control" placeholder="Officer Name" required>
                </div>

                <div class="col-sm-12 col-md-4 form-group " style="padding: 10px;">
                    <input type="text" value="{{ $traveller_name }}" name="traveller_name" class="form-control" placeholder="Traveller Name" required>
                </div>

                <div class="col-sm-12 col-md-4 form-group" style="padding: 10px;">
                    <input type="text" value="{{ $passport_number }}"  name="passport_number" class="form-control" placeholder="Passport Number" required>
                </div>

                <div class="col form-group" style="padding: 10px;">
                    <input type="text" value="{{ $amount }}" name="amount" class="form-control" placeholder="Payment Amount" required>
                </div>

                <div class="col-sm-12 col-md-4 form-group" style="padding: 10px;">
                    <input type="text" value="{{ $description }}" name="description" class="form-control" placeholder="Description" required >
                </div>

                    <input type="hidden" value="{{ $id }}" name="id" >

                    <button type="submit" class="btn btn-primary">Submit</button>

                {{-- !INPUT BOX CREATION END !--}}
            </div>
</body>
</html>
@endsection
