@extends('admin.layout')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Export Goods</title>
</head>
<body>
    <h1  style="margin-top: 4%; text-align: center;">
        Expoterd Good Information
    </h1>
    <a href="{{ url('admin/goods/manage_goods') }}">
        <button type="button" class="btn btn-success" style="align-content: center; margin-top: 80px; margin-left: 80px">Back</button>
    </a>

    <div class="formalign" >
        <form>
                <div class="row"  style="margin-top:6%; margin-left: 8%; margin-right: 8%; ">
                    <div class="col form-group">
                        <input type="text" class="form-control" placeholder="First name">
                    </div>
                        <div class="col form-group">
                            <input type="text" class="form-control" placeholder="Last name">
                        </div>

                </div>
            <div class="row">
              <div class="col-sm-12 col-md-4 form-group" style="margin-left: 4%">
                <input type="text" class="form-control" placeholder="City" style="margin-left: 15%">
              </div>
               <div class="col-sm-12 col-md-4 form-group">
                <input type="text" class="form-control" placeholder="Zipcode" style="margin-left: 45%">
              </div>
              <div class="col-sm-12 col-md-4 form-group">
                <input type="text" class="form-control" placeholder="Country"  style="margin-left: 28%">
              </div>
            </div>
            <button type="submit" class="btn btn-info"  style="margin-left: 9%">Submit</button>
          </form>
        </div>
</body>
</html>
