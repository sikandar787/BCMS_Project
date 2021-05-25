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

        {{-- Form Div --}}
        <div class="formSubmission">
            <form action="{{ Route('report.insert') }}" method="POST">
               @csrf
            </form>
        </div>
        {{-- form Div End --}}
    </div>
</body>
</html>
