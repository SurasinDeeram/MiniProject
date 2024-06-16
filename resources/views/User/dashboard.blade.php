<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="dashboard.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <title>Entrepreneur</title>
</head>

<body>
    
    <section class="navbar">
        <div class="logo">
            <h1>MyLogo</h1>
        </div>
        <ul>
            <li><a href="#">ค้นหางาน</a></li>
            <li><a href="{{ url('dash_search') }}"">โปรไฟล์</a></li>
            <li><a href="{{ url('entrelogin') }}">ผู้ประกอบหารเข้าสู่ระบบ</a></li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="btn-logout">ออกระบบ</button>
            </form>


        </ul>
    </section>
    <form action="{{ url('User.dashboard') }}" method="GET" class="search">
        <input type="search" id="jobPosition" value="" name="search"
            class="form-control"placeholder="ตำแหน่งงาน คีย์เวิร์ด หรือบริษัท">
        <input type="search" id="location" value="" name="search" class="form-control"
            placeholder="สถานที่ทำงานทั้งหมด">

    </form>

<div class="container">
    <div class="row">
        @foreach ($entre_adds as $entreAdd)
            <!-- ในแบบฟอร์มของแต่ละการ์ด -->
            <div class="col-md-3">
                <div class="card mb-4 ">
                    <!-- เพิ่ม data-toggle และ data-target เพื่อเรียกใช้โมดอล -->
                    <h5>ประกาศรับสมัครงาน</h5>
                    <a href="concertModal{{ $entreAdd->id }}" data-toggle="modal"
                        data-target="#concertModal{{ $entreAdd->id }}">
                        {{-- {{ $entreAdd->jobPosition }} ใส่รูปได้ --}}
                        <div class="card-body">
                            <h5 class="card-title " style="color: black">{{ $entreAdd->jobPositionThai }}</h5>
                        </div>
                    </a>
                </div>
            </div>

            <!-- โมดอลของแต่ละการ์ด -->
            <div class="modal fade" id="concertModal{{ $entreAdd->id }}" tabindex="-1"
                aria-labelledby="concertModal{{ $entreAdd->id }}Label" aria-hidden="true">

                <div class="modal-dialog modal-dialog-centered" >
                    <div class="modal-content ">
                        <div class="modal-header" >
                            <h5 class="modal-title" id="concertModal{{ $entreAdd->id }}Label">
                                {{ $entreAdd->jobPosition }}</h5>
                            <a href="{{ url('form_1') }}" class="btn btn-block btn-dark" type="submit" style="font-size: 15px;margin-left: 50px">สมัครงาน</a>

                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <p>ตำแหน่งงาน: {{ $entreAdd->jobPosition }}</p>
                            <p>ประเภทธุรกิจ: {{ $entreAdd->subject }}</p>
                            <p>ประเภทธุรงาน: {{ $entreAdd->topic }}</p>
                            <p>สถานที่ทำงาน : {{ $entreAdd->chapter }}</p>
                            <p>ระยะเวลาจ้างงาน : {{ $entreAdd->check_type }}</p>

                            <h5>รายละเอียดงาน :</h5> {{ $entreAdd->jobDescription }}</p>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
    <script>
        document.getElementById('searchButton').addEventListener('click', function() {
            var jobPosition = document.getElementById('jobPosition').value;
            var location = document.getElementById('location').value;
            var jobType = document.getElementById('jobType').value;

            // ทำการค้นหาข้อมูลจากเซิร์ฟเวอร์โดยส่งค่า jobPosition, location, และ jobType ไปยังเซิร์ฟเวอร์
            // และแสดงผลลัพธ์ในเว็บไซต์ของคุณ
        });
    </script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
