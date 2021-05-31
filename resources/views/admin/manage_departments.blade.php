@extends('admin.layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Departments</title>
</head>
<body>
        <style>

        </style>
        <div class="heading" style="margin-top: 70px; text-align:center;">
           <h1> Add Departments Information</h1>
        </div>
        <div style="margin-left: 5%; background-color: #20b376 ; ">
            {{ session('success') }}
    </div>

        <div class="container">
            <form action="{{ Route('add_departments') }}" method="POST" >
                @csrf
                <div class="row" style="display: block; padding: 30px 50px;  ">
                    <div class="col mt-40" style="padding: 20px;">
                      <input type="text" class="form-control"  placeholder="Enter Deparment Name" name="dep_name" required>
                    </div>
                    <div class="col mt-40" style="padding: 20px;">
                        <input type="text" class="form-control"  placeholder="Enter Email" name="email" required>
                     </div>
                     <div class="col mt-40" style="padding: 20px;">
                        <input type="text" class="form-control"  placeholder="Enter Password" name="password" required>
                     </div>




                     <button type="submit" class="btn btn-primary mt-3" style="cursor: pointer;  width: 100%;  color: white; padding: 11px 10px; border-radius: 2px;  color: white; padding: 14px 20px; margin: 8px 0;">Submit</button>
            </form>
        </div>
</body>
</html>
