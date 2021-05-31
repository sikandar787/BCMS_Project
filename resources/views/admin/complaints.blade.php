@extends('admin.layout')



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Complaints</title>
</head>
<body>

        {{-- <div class="btn" style="align-content: center; margin-top: 80px; margin-left: 80px">
            <a href="admin/manage_complaitns">Add Complaints</a>
        </div> --}}
        <a href="complaints/manage_complaints">
        <button type="button" class="btn btn-success" style="align-content: center; margin-top: 80px; margin-left: 80px">Add New Complaint</button>
    </a>

    <h1 style="text-align: center; margin-top: -50px;" > Add Complaints</h1>
            <div style="margin-left: 5%; background-color: #20b376 ;">
                    {{ session('success') }}
            </div>
    <table class="table" style="margin: 60px; ">
        <thead class="thead-dark">
          <tr>

            <th scope="col">Id</th>
            <th scope="col">Officer Name</th>
            <th scope="col">Traveller Name</th>
            <th scope="col">Passport Number</th>
            <th scope="col">Complaint Description</th>
            <th scope="col"> Action</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($data as $list )


          <tr>

            <td>{{ $list->id }}</td>
            <td>{{ $list->officer_name }}</td>
            <td>{{ $list->traveller_name }}</td>
            <td>{{ $list->passport_number }}</td>
            <td>{{ $list->description}}</td>
            <td>
                <a href="{{ url('admin/complaints/delete/') }}/{{ $list->id }}">
                    <button type="button" class="btn btn-danger">Delete</button>
                </a>
                <a href="{{ url('admin/complaints/manage_complaints/') }}/{{ $list->id }}">
                  <button type="button" class="btn btn-primary">Edit</button>
              </a>
            </td>


          </tr>
          @endforeach
        </tbody>
      </table>


</body>
</html>
