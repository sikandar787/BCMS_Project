@extends('admin.layout')
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
        #frame_id{
            width:1200px;
             height: 600px  ;
             max-width: 40rem;

        }
    </style>
 <div class="container">
    <a href="{{ url('admin/medical_reports') }}">
        <button type="button" class="btn btn-success" style="align-content: center; margin-top: 7rem; margin-left: 7rem">Back</button>
    </a>
     <div class="view">
         <h1 style="text-align: center">Details</h1>
         <label style="font-weight: bold; font-size:2rem" for="id">ID:</label>
         <p style="font-size: 1.5rem;">
            {{ $data->id }}
         </p>


         <label style="font-weight: bold; font-size:2rem" for="traveller_name">Traveller Name:</label>
         <p style="font-size: 1.5rem;">
            {{ $data->traveller_name }}
        </p>
         <label style="font-weight: bold; font-size:2rem" for="traveller_passport_number">Traveller Passport Number:</label>
        <p style="font-size: 1.5rem;">
            {{ $data->traveller_passport_number }}
        </p>
        <div>
            <label style="font-weight: bold; font-size:1.7rem" for="file">File:</label>
            <iframe src="/assets/{{ $data->file  }}" id="frame_id" frameborder="0"></iframe>
        </div>

     </div>
 </div>





</body>
</html>
@endsection
