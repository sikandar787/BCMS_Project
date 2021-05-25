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
                        <div class="container" style="   background-color: #4fe6a7 ;" class="">
                            {{ session('success') }}
                                        </div>
                        {{-- Session Message End --}}
                        <form action="{{ Route('mannage_luggage_process') }}" method="POST">
                            @csrf
                            <div class="row" style="display: block; padding: 30px 50px;  ">
                                <div class="col mt-40" style="padding: 20px;">
                                  <input type="text" class="form-control" id="t_name" placeholder="Enter Traveller Name" name="traveller_name" required>
                                </div>
                                <div class="col mt-40" style="padding: 20px;">
                                    <input type="text" class="form-control" id="t_name" placeholder="Enter Traveller Passport Number" name="traveller_passport_number" required>
                                  </div>
                                <div class="col" style="padding: 20px;">
                                  <input type="text" class="form-control" placeholder="Enter Luggage Serial Number " name="luggage_serial_number" required>
                                </div>
                                <div class="col" style="padding: 20px;">
                                    <input type="text" class="form-control" placeholder="Enter Number of Luggages" name="number_of_luggage" required>
                                  </div>
                                  <div class="col" style="padding: 20px;">
                                    <input type="text" class="form-control" placeholder="Enter Luggage Type" name="luggage_type" required>
                                  </div>
                              </div>
                              <button type="submit" class="btn btn-primary mt-3" style="cursor: pointer;  width: 100%;  color: white; padding: 11px 10px; border-radius: 2px;  color: white; padding: 14px 20px; margin: 8px 0;">Submit</button>
                        </form>

                    </div>


</body>
</html>





                    {{-- <div class="row"  >
                                <div class="col form-group">
                                    <input type="text" name="exporter_name" class="form-control" placeholder="Exporter name">
                                </div>
                                        <div class="col form-group">
                                            <input type="text" name="impoter_name" class="form-control" placeholder="Impoter name">
                                        </div>
                                                <div class="col form-group">
                                                    <input type="text" name="exporter_address" class="form-control" placeholder="Exporter Address">
                                                </div>
                                                        <div class="col form-group">
                                                            <input type="text" name="impoter_address" class="form-control" placeholder="Impoter Address">
                                                        </div>
                                                        {{-- new --}}
                                                        {{-- <div class="col form-group" >
                                                            <input type="text" name="city" class="form-control" placeholder="City" >
                                                        </div>
                                                            <div class="col form-group">
                                                                <input type="text" name="zipcode" class="form-control" placeholder="Zipcode" >
                                                            </div>
                                                                    <div class="col form-group">
                                                                        <input type="text" name="country" class="form-control" placeholder="Country" >
                                                                    </div>
                                                                            <div class="col form-group">
                                                                                <input type="text" name="product_name" class="form-control" placeholder="Product Name" >
                                                                            </div>
                                                                                        <div class="col form-group">
                                                                                            <input type="text" name="quantity" class="form-control" placeholder="Quantity" >
                                                                                        </div> --}}


                            {{-- <button type="submit"  class="btn btn-info"  style="margin-left: 9%">Submit</button> --}}
