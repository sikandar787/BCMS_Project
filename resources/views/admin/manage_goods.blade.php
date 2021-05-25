@extends('admin.layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Add Goods</title>
</head>
<body>


    <h1  style="margin-top: 70px; text-align: center;">
        Impoterd Good Information
    </h1>
    <div class="btn btn-success float-left" style=" margin-top: ; margin-left: 70px; display: inline-block;">

        <a href="{{ url('admin/goods') }}">
            <button type="button" class="btn btn-success" >Back</button>
        </a>

</div>
{{-- Session MSG --}}
<div style="margin-left: 15%; margin-top:50px; background-color: #20b376 ;" class="">
    {{ session('message') }}
</div>
{{-- Session MSG End --}}


    <div class="container"  style="margin 0px; " >
        <form action="{{ Route('goods.insert') }}" method="POST">
            @csrf
            {{-- INPUT BOX CREATION --}}
            <div class="row" style="display: flex; padding: 10px; margin-top: 50px">
                <div class="col-sm-12 col-md-4 form-group" style="padding: 10px;">
                    <input type="text" value="{{ $exporter_name }}" name="exporter_name" class="form-control" placeholder="Exporter name" required>
                </div>

                <div class="col-sm-12 col-md-4 form-group " style="padding: 10px;">
                    <input type="text" value="{{ $impoter_name }}" name="impoter_name" class="form-control" placeholder="Impoter name" required>
                </div>

                <div class="col-sm-12 col-md-4 form-group" style="padding: 10px;">
                    <input type="text" value="{{ $exporter_address }}"  name="exporter_address" class="form-control" placeholder="Exporter Address" required>
                </div>

                <div class="col form-group" style="padding: 10px;">
                    <input type="text" value="{{ $impoter_address }}" name="impoter_address" class="form-control" placeholder="Impoter Address" required>
                </div>

                <div class="col-sm-12 col-md-4 form-group" style="padding: 10px;">
                    <input type="text" value="{{ $city }}" name="city" class="form-control" placeholder="City" required >
                </div>

                <div class="col-sm-12 col-md-4 form-group" style="padding: 10px;">
                    <input type="text" value="{{ $zipcode }}" name="zipcode" class="form-control" placeholder="Zipcode" required>
                </div>

                <div class="col-sm-12 col-md-4 form-group" style="padding: 10px;">
                    <input type="text" value="{{ $country }}" name="country" class="form-control" placeholder="Country" required >
                </div>

                <div class="col-sm-12 col-md-4 form-group" style="padding: 10px;">
                    <input type="text" value="{{ $product_name }}" name="product_name" class="form-control" placeholder="Product Name"  required>
                </div>


                <div class="col-sm-12 col-md-4 form-group" style="padding: 10px;">
                    <input type="text" value="{{ $quantity }}" name="quantity" class="form-control" placeholder="Quantity" required >
                </div>


                {{-- !INPUT BOX CREATION END !--}}
            </div>
            {{-- ROW CLASS DIV UPER --}}

            {{-- Submitt Button --}}
            <div class="text-center" style="cursor: pointer;  width: 100%;  color: white; padding: 11px 10px; border-radius: 2px;  color: white; padding: 14px 20px; margin: 8px 0;">
                <button type="submit"  class="btn btn-info"  >Submit</button>
            </div>


        </form>
    </div>
</body>
</html>


{{-- Exported Goods Btn --}}

{{-- <div>
                    <a href="manage_goods/exported_goods">
                        <button type="button" class="btn btn-success" style="align-content: center; margin-top: 80px; margin-left: 80px">Add Exported Goods</button>
                    </a>
                </div> --}}

{{-- Check Box Code --}}

{{--
  {{-- <div class="check_box" style="margin-left: 8%">
                                                        <div class="form-check-inline">
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                    Goods Type
                                                                    </label>
                                                                    <label class="form-check-label">
                                                                    <input type="checkbox" name="goods_type[]" class="form-check-input" value="Imported">Impotred
                                                                    </label>
                                                                </div>
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                    <input type="checkbox" name="goods_type[]" class="form-check-input" value="Exported">Exported
                                                                    </label>
                                                                </div> --}} --}}


{{-- Back Button --}}
{{--
     --}}


    {{-- Main Code --}}

