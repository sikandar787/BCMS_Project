@extends('admin.layout')
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
    .switch {
    position: relative;
    display: inline-block;
    width: 60px;
    height: 34px;
    }

    .switch input {
    opacity: 0;
    width: 0;
    height: 0;
    }

    .slider {
    position: absolute;
    cursor: pointer;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background-color: #ccc;
    -webkit-transition: .4s;
    transition: .4s;
    }

    .slider:before {
    position: absolute;
    content: "";
    height: 26px;
    width: 26px;
    left: 4px;
    bottom: 4px;
    background-color: white;
    -webkit-transition: .4s;
    transition: .4s;
    }

    input:checked + .slider {
    background-color: #2196F3;
    }

    input:focus + .slider {
    box-shadow: 0 0 1px #2196F3;
    }

    input:checked + .slider:before {
    -webkit-transform: translateX(26px);
    -ms-transform: translateX(26px);
    transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
    border-radius: 34px;
    }

    .slider.round:before {
    border-radius: 50%;
    }
        </style>
    <div class="container">
        <h1 style="text-align: center; margin-top: 6%;">Departments</h1>
    </div>

    <div style="margin-left: 5%; margin-top:20px; background-color: #20b376 ; ">
        {{ session('message') }}
</div>
<div style="margin-left:80px; margin-top:-50px;">
    <a href="departments/manage_departments">
        <button type="submit" class="btn btn-success">Add Departments</button>
    </a>
</div>

    <div class="container-fluid">
    <table class="table" style="margin-left: 4%;  margin-right: 150px; margin-top:70px;" >
        <thead class="thead-dark">
          <tr>
            {{-- <th scope="col">#</th> --}}
            <th scope="col">Id</th>
            <th scope="col">Deparment Type Id</th>
            <th scope="col">Department Name</th>
            <th scope="col">Email</th>
            <th scope="col">Password</th>
            <th scope="col">Status</th>
            <th scope="col"> Action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($data as $list )


          <tr>
            {{-- <th scope="row">1</th> --}}
            <td>{{ $list->id }}</td>
            <td>{{ $list->dep_type_id}}</td>
            <td>{{ $list->dep_name}}</td>
            <td>{{ $list->email }}</td>
            <td>{{ $list->password}}</td>
            <td> <a href="">
                <label class="switch">
                    <input type="checkbox" checked>
                    <span class="slider round"></span>
                  </label>
            </a></td>

            <td>

                <div style="margin-right: 35px;">
                    <a href="{{ url('admin/departments/delete/') }}/{{ $list->id }}">
                        <button type="button" class="btn btn-danger">Delete</button>
                    </a>
                    <a href="{{ url('admin/departments/manage_departments/') }}/{{ $list->id }}">
                        <button type="button" class="btn btn-primary" s>Edit</button>
                    </a>
                </div>

            </td>

          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
</body>
</html>
