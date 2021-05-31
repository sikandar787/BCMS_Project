@extends('admin.layout');
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
        .container{
            margin: 0%;
            padding: 0%;
        }
        .heading{
            margin: 0px;
            padding: 0px;
            margin-top: 50px;
            display: block;
        }

        .add_report_btn{
            margin: 0px;
            margin-top: -49px;
            width: 100%;
            cursor: pointer;
            margin-left: -250px;
        }
    </style>
    <div class="container">
        {{-- Headind Div --}}
        <div class="heading">
            <h1 style="text-align: center">Medical Reports</h1>
        </div>
        {{-- heading Div End --}}

        {{-- Add Report Btn Div --}}
        <div class="add_report_btn">
            <a href="{{ url('admin/medical_reports/manage_medical_reports') }}">
                <button type="button" class="btn btn-success" style=" ">Add Medical Report</button>
            </a>
        </div>
        {{-- Add Report Btn Div End --}}
        {{-- session msg --}}
        <div class="message" style=" background-color: #20b376 ;  ">
            {{ session('success') }}
    </div>
        {{-- end msg --}}
        {{-- Form Div --}}
        <div class="data_table">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Traveller Name</th>
                        <th scope="col">Traveller Passport Number</th>
                        <th scope="col">File</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $data)
                      <tr>

                        <td> {{ $data->id }}</td>
                        <td> {{ $data->traveller_name }}</td>
                        <td> {{ $data->traveller_passport_number }}</td>
                        <td> {{ $data->file }}</td>

                        <td>
                            <div class="button" style="margin-right: 35px;">
                                <a href="{{ url('admin/medical_reports/delete/') }}/{{ $data->id }}">
                                    <button type="button" class="btn btn-danger">Delete</button>
                                </a>

                                <a href="{{ url('admin/files/view/') }}/{{ $data->id }}" >
                                    <button type="button" class="btn btn-success" s>View</button>
                                </a>
                            </div>
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
            </div>
        </div>
        {{-- form Div End --}}
    </div>
</body>
</html>
