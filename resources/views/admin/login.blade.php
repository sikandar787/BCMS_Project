<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
</head>
<body style="background-color: #f0f0f0 ">
    <div class="container" style="border-radius: 5px;
    background-color: #ebe1e1;
    padding: 160px; margin-top: 100px;">
    <h1 style="text-align: center"> Border Crossing Management System</h1>
        <form action="{{ Route('admin.auth') }}" method="POST">
            @csrf
            <div class="row" style="display: block; padding: 30px 50px;  ">
                <div class="col mt-40" style="padding: 20px;">
                  <input type="text" class="form-control" id="t_name" placeholder="Enter Email" name="email" required>
                </div>
                <div class="col mt-40" style="padding: 20px;">
                    <input type="password" class="form-control"  placeholder="Enter Password" name="password" required>
                  </div>
              </div>
              <div style="margin: auto;
              width: 50%;
              margin-right:50px;
              padding: 10px;">
                <button type="submit" class="btn btn-success mt-3"  >Submit</button>
              </div>

        </form>
    </div>


    {{ session('error') }}
</body>
</html>










{{--
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-md-2"></div>
        <div class="col-lg-6 col-md-8 login-box">
            <div class="col-lg-12 login-key">
                <i class="fa fa-key" aria-hidden="true"></i>
            </div>
            <div class="col-lg-12 login-title">
                ADMIN PANEL
            </div>

            <div class="col-lg-12 login-form">
                <div class="col-lg-12 login-form">
                    <form>
                        <div class="form-group">
                            <label class="form-control-label">USERNAME</label>
                            <input type="text" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label class="form-control-label">PASSWORD</label>
                            <input type="password" name="password"  id="password" class="form-control" i>
                        </div>

                        <div class="col-lg-12 loginbttm">
                            <div class="col-lg-6 login-btm login-text">
                                <!-- Error Message -->
                            </div>
                            <div class="col-lg-6 login-btm login-button">
                                <button type="submit" class="btn btn-outline-primary">LOGIN</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-3 col-md-2"></div>
        </div>
    </div> --}}




{{--  </div>
    <div class="col-lg-12 login-title">
        Broder Crossing Management System
    </div>
        @csrf
        <div class="form-group">
            <label class="form-control-label">USERNAME</label>
            <input type="text" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label class="form-control-label">PASSWORD</label>
            <input type="password" name="password"  id="password" class="form-control" i>
        </div>
        <div class="col-lg-6 login-btm login-button">
            <button type="submit" class="btn btn-outline-primary">LOGIN</button>
        </div> --}}
