@extends('admin.layout')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Manage Luggae</title>
</head>
<body>
    <style>
        .mt{
            margin-top: -50px;
        }
        .text-left{
            margin: 0px;
            margin-top: 80px;
            margin-left: 80px
        }
        .message{
            font-family: Arial, Helvetica, sans-serif;
            font-size: 20px;
            font-weight: bold;
            text-align: left;
            margin-left: 60px;
        }

    .table{
        margin-top: 60px;
        margin-left:60px;
        position: relative;
        padding: 100px;
    }
    </style>

    <div class="container.fluid">
        {{--Add LuggageButton Div --}}
        <div class="text-left">
            <a href="luggage/manage_luggage">
                <button type="button" class="btn btn-success" style="align-content: center; ">Add Luggage</button>
            </a>
        </div>
        {{--Add Luggage Button Div End --}}

        {{-- Heading Div --}}
        <div class="mt">
            <h1 style="text-align: center">Luggage</h1>
        </div>
        {{-- Heading Div End --}}

        {{-- Seesion Message Start --}}
        <div class="message" style=" background-color: #20b376 ;  ">
            {{ session('success') }}
    </div>
        {{-- Session Messgae End --}}

        {{-- Tabel Div Start  --}}
        <div class="table-responsive">
            <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Traveller Name</th>
                    <th scope="col">Traveller Passport Number</th>
                    <th scope="col">Luggage Srial Nummer</th>
                    <th scope="col">Number Of Luggage</th>
                    <th scope="col">Luggage Type</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $list)
                  <tr>
                    <td> {{ $list->id }}</td>
                    <td> {{ $list->traveller_name }}</td>
                    <td> {{ $list->traveller_passport_number }}</td>
                    <td> {{ $list->luggage_serial_number }}</td>
                    <td> {{ $list->number_of_luggage }}</td>
                    <td> {{ $list->luggage_type }}</td>

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
                  @endforeach
                </tbody>
              </table>
        </div>
        {{-- Table Div End --}}
    </div>
</body>
</html>

