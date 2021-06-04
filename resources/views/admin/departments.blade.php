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
    <div class="container">
        <h1 style="text-align: center; margin-top: 6%;">Departments</h1>
    </div>

    <div style="margin-left: 5%; margin-top:20px; background-color: #20b376 ; ">
        {{ session('message') }}
</div>
<div style="margin-left: 5%; margin-top:20px; background-color: #20b376 ; ">
    {{ session('success') }}
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
            <td>{{ $list->status }}</td>
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
