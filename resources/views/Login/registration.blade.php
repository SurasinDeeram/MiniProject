<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>สมัครสมาชิก</title>
    <link rel="stylesheet" href="{{ asset('loogin.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <div class="container" style="margin-left: 600px;margin-top:10%">
        <div class="row" >
            <div class="col-md-12">
                <div class="card" style="background-color: rgba(46, 201, 236, 0.671)">
                    <div class="card-header" style="background-color: rgb(205, 205, 205)">
                        สมัครสมาชิก
                    </div>
                    <div class="card-body" >
                        <form action="{{ route('registration.user') }}" method="POST" enctype="multipart/form-data">
                            @if(Session::has('success'))
                            <div class="alert alert-success">{{ Session::get('success') }}</div>
                            @endif
                            @if(Session::has('fail'))
                            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
                            @endif
                            @csrf
                            <div class="form-group" style="color: aliceblue;">
                                <label for="name">Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Enter full name">
                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                            </div>
                            <div class="form-group" style="color: aliceblue;">
                                <label for="email">Email</label>
                                <input type="text" name="email" class="form-control" placeholder="Enter Email">
                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                            </div>
                            <div class="form-group" style="color: aliceblue;">
                                <label for="password">Password</label>
                                <input type="text" name="password" class="form-control" placeholder="Enter Password">
                            <span class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                            </div><br>
                            <button class="btn btn-block" style="color: rgb(0, 0, 0);background-color:aliceblue">
                                Regis
                            </button>
                        </form>
                        <br>
                            <a href="{{ url('login') }}" class="link-gis">ไปที่ หน้าล็อคอิน</a>
                    </div>
                </div>
            </div>
        </div>
    </div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>