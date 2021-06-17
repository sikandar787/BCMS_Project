@extends('admin.layout')
@section('payment_select', 'active')
@section('container')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <style>
.heading{
    margin: -40px;
    text-align: center;
}
.container table{}
.table{
    margin-top:40px;
    margin-left: 60px;


}
    </style>
    <div class="heading"> <h1>Payments
    </h1> </div>
   {{-- Table Start --}}
   <div class="conatiner">
       <div class="table-responsive">
    <table class="table">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Traveller Name</th>
            <th scope="col">Traveller Passport Number</th>
            <th scope="col">Amount</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            {{-- @foreach ($data as $list)
          <tr>
            <td> {{ $list->id }}</td>
            <td> {{ $list->traveller_name }}</td>
            <td> {{ $list->passport_number }}</td>
            <td> {{ $list->description }}</td>
            <td> {{ $list->amount }}</td>
            <td> {{ $list->status }}</td>

            <td>
                <div class="button" style="margin-right: 35px;">
                    <a href="{{ url('admin/luggage/delete/') }}/{{ $list->id }}">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                    <a href="{{ url('admin/luggage/manage_luggage/') }}/{{ $list->id }}">
                        <button type="button" class="btn btn-primary" s>Edit</button>
                    </a>
                </div>
            </td>
          </tr>
          @endforeach --}}
        </tbody>
      </table>
</div></div>

{{-- end table --}}
</body>
</html>
@endsection
