
@extends('admin.layout')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Goods Info</title>
</head>
<body>
    <div class="container">
        <h1 style="text-align: center; margin-top: 6%;">Transport Goods</h1>
    </div>
    <div style="margin-left: 5%; background-color: #20b376 ; ">
        {{ session('success') }}
</div>
    <div style="">
        <a href="goods/manage_goods">
            <button type="button" class="btn btn-success" style="align-content: center; margin-top: 60px; margin-left: 80px; margin-bottom: 20px;">Add Goods</button>
        </a>
    </div>
    <div class="table-responsive" style="position: absolute; display:block;" >
        <table class="table" style="margin-left: 4%;  margin-right: 150px;">
            <thead class="thead-dark">
              <tr>
                {{-- <th scope="col">#</th> --}}
                <th scope="col">Id</th>
                <th scope="col">Importer Name</th>
                <th scope="col">Exporter Name</th>
                <th scope="col">Importer Address</th>
                <th scope="col">Exporter Address</th>
                <th scope="col"> Country</th>
                <th scope="col">City</th>
                <th scope="col">Zip Code</th>
                <th scope="col">Product Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Goods Type</th>
                <th scope="col"> Action</th>

              </tr>
            </thead>
            <tbody>
                @foreach ($data as $list )


              <tr>
                {{-- <th scope="row">1</th> --}}
                <td>{{ $list->id }}</td>
                <td>{{ $list->exporter_name }}</td>
                <td>{{ $list->impoter_name }}</td>
                <td>{{ $list->exporter_address }}</td>
                <td>{{ $list->impoter_address }}</td>
                <td>{{ $list->city }}</td>
                <td>{{ $list->zipcode }}</td>
                <td>{{ $list->country }}</td>
                <td>{{ $list->product_name }}</td>
                <td>{{ $list->quantity }}</td>
                <td>{{ $list->goods_type }}</td>
                <td>

                    <div style="margin-right: 35px;">
                        <a href="{{ url('admin/goods/delete_goods/') }}/{{ $list->id }}">
                            <button type="button" class="btn btn-danger">Delete</button>
                        </a>
                        <a href="{{ url('admin/goods/manage_goods/') }}/{{ $list->id }}">
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
