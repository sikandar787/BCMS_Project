@extends('admin.layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Add Luggage</title>
</head>
<body>

            <div class="container"  style="margin-top: 60px;">
                 <h1  style="text-align: center; padding-bottom: 28px;" >
                     Add  Luggage Information
                  </h1>
             </div>

             <div class="back_btn" style=" margin-top: -50px; margin-left: 80px; cursor: pointer;">
               <a href="{{ url('admin/luggage') }}">
                    <button type="button" class="btn btn-success" >Back</button>
               </a>
               </div>

                    </div>

                    <div class="container" style="border-radius: 5px;
                    background-color: #f0f0f0;
                    padding: 20px;" >
                        <h3 style="text-align: center; padding-top:15px;">Enter Details</h3>
                        {{-- Session Message --}}
                        <div class="container" style="  margin-top:20px; background-color: #4fe6a7 ;" class="">
                            {{ session('success') }}
                                        </div>
                        {{-- Session Message End --}}
                        <form action="{{ Route('add_luggage') }}" method="POST">
                            @csrf
                            <div class="row" style="display: block; padding: 30px 50px;  ">
                                <div class="col mt-40" style="padding: 20px;">
                                  <input type="text" value="{{ $traveller_name }}" class="form-control"  placeholder="Enter Traveller Name" name="traveller_name" required>
                                </div>
                                <div class="col mt-40" style="padding: 20px;">
                                    <input type="text" class="form-control"  placeholder="Enter Traveller Passport Number"
                                    value="{{ $traveller_passport_number }}" name="traveller_passport_number" required>
                                  </div>
                                <div class="col" style="padding: 20px;">
                                  <input type="text" class="form-control" placeholder="Enter Luggage Serial Number "
                                  value="{{ $luggage_serial_number }}"
                                  name="luggage_serial_number" required>
                                </div>
                                <div class="col" style="padding: 20px;">
                                    <input type="text" class="form-control" value="{{ $number_of_luggage }}" placeholder="Enter Quantity of Luggages" name="number_of_luggage" required>
                                  </div>
                                  <div class="col" style="padding: 20px;">
                                    <input type="text" class="form-control" value="{{ $luggage_type }}" placeholder="Enter Luggage Type" name="luggage_type" required>
                                  </div>
                              </div>
                              <input type="hidden" value="{{ $id }} " name="id" >
                              <button type="submit" class="btn btn-primary mt-3" style="cursor: pointer;  width: 100%;  color: white; padding: 11px 10px; border-radius: 2px;  color: white; padding: 14px 20px; margin: 8px 0;">Submit</button>
                        </form>

                    </div>


</body>
</html>





