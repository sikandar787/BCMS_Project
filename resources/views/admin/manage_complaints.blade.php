@extends('admin.layout')


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Complaints</title>
</head>
<body>
    <a href="{{ url('admin/complaints') }}">
        <button type="button" class="btn btn-success" style="align-content: center; margin-top: 80px; margin-left: 80px">Back</button>
    </a>
    <h1 style="text-align: center">Add Complaints</h1>

    <div class="formComplaints" style="margin-left: 8%; margin-right: 8%;   ">
        <form action="{{ Route('add_complaints') }}" method="POST">

            @csrf
            <div class="form-group">
                <label for="text">Officer Names:</label>
                <input type="text" class="form-control" value="{{ $officer_name }}" name="officer_name" placeholder="Enter Officer Name" id="officer_name" required>
              </div>
              <div class="form-group">
                <label for="text">Traveller Name:</label>
                <input type="text" class="form-control"  value="{{ $traveller_name }}"   name="traveller_name" placeholder="Enter Traveller Name" id="traveller_name " required>
              </div>
              <div class="form-group">
                <label for="text">Traveller Passport  Number:</label>
                <input type="text" class="form-control"  value="{{ $passport_number }}"  name="passport_number" placeholder="Enter Traveller Passport Number" id="passport_number"required>
              </div>
              <div class="form-group">
                <label for="text">Complaint Description</label>
                <input type="text" class="form-control"  value="{{ $description }}"  name="description" placeholder="Enter Description" id="description"required>
              </div>
              <input type="hidden" value="{{ $id }} " name="id">
              <button type="submit" class="btn btn-primary">Submit</button>

        </form>
    </div>
</body>
</html>
