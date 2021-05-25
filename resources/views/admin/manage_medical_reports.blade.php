@extends("admin.layout");
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
        body{
            margin: 0%;
            padding: 0%;
        }
        .container{
            margin: 0%;
            padding: 0%;
        }
        .heading1{
            margin: 0px;
            padding: 0px;
            margin-top: 50px;
            display: block;
            text-align: center
        }
        .back_btn{
            margin: 0px;
            margin-top: -49px;
            width: 100%;
            cursor: pointer;
            margin-left: -250px;
        }
    </style>
    {{-- Container Div Start --}}
    <div class="container">
        {{-- Heading --}}
        <div class="heading1">
            <h1>
                Add Medical Reports
            </h1>
        </div>
    {{-- End Heading --}}

    {{-- Back Button --}}
    <div class="back_btn">
        <a href="{{ url('admin/medical_reports') }}">
            <button type="button" class="btn btn-success" >Back</button>
        </a>
    </div>
    {{-- Back Button End --}}

    {{-- Form Div Start --}}

    <form action="{{ Route('manage_medical_reports_process') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row" style="display: block; padding: 30px 50px;  ">
            <div class="col mt-40" style="padding: 20px;">
              <input type="text" class="form-control" id="t_name" placeholder="Enter Traveller Name" name="traveller_name" required>
            </div>
            <div class="col mt-40" style="padding: 20px;">
                <input type="text" class="form-control" id="t_name" placeholder="Enter Traveller Passport Number" name="traveller_passport_number" required>
             </div>
             <div class="col mt-40" style="padding: 20px;">
                <input type="file" class="form-control" id="_name" placeholder="Upload File" name="file_name" required>
             </div>




             <button type="submit" class="btn btn-primary mt-3" style="cursor: pointer;  width: 100%;  color: white; padding: 11px 10px; border-radius: 2px;  color: white; padding: 14px 20px; margin: 8px 0;">Submit</button>
    </form>
    {{-- Form Div End --}}

    </div>
{{-- Container Div End --}}
</body>
</html>
