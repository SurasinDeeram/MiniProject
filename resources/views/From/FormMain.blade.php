<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <title>Entrepreneur</title>
</head>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img src="https://getbootstrap.com/docs/5.3/assets/brand/bootstrap-logo.svg" alt="Logo" width="50" height="50" class="d-inline-block align-text-top">
      </a>
    
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <ul>
          <div class="collapse navbar-collapse" id="navbarNav">
              <ul class="navbar-nav ml-auto">
                <div class="btn-3">
                  <button class="button type1">
                    <span class="btn-txt">เว็บไซต์ผู้สมัครงาน</span>
                </button>
                  </div>
                  <div class="btn-3">
                    <button class="button type2">
                      <a href="{{ url('login') }}" class="btn-txt">ลงทะเบียน</a>
                  </button>
                  <div class="btn-3">
                    <button class="button type3">
                    <a href="{{ url('entre') }}" class="btn-txt">ผู้ประกอบหารเข้าสู่ระบบ</a>
                </button>
              </ul>
          </div>
        </ul>
  </div>
</nav>
</header>
{{-- style="background: url('Image/medium-shot-man-wearing-vr-glasses.jpg')" --}}
<body>
<div class="container" >
    <div class="card-img" >
      <div class="img-box" >
      <img src="{{ asset('Image/medium-shot-man-wearing-vr-glasses.jpg') }}" alt="" width="500px">
    </div>
      {{-- <div class="img-box" style="background-color: black">
      <img src="{{ asset('Image/medium-shot-man-wearing-vr-glasses.jpg') }}" alt="" width="200px">
    </div> --}}
  </div>
</div>

<div class="container-text" >
  <div class="txt-head" >
    <h1>หาคนกับ JobsDB ดีอย่างไร ?​</h1>
  </div>

  <div class="text-body">
    <div class="row">
      <div class="col">
        <h2 class="h">แพลตฟอร์มอันดับ 1 ที่ครองใจผู้สมัครงาน</h2>
        <h4>เข้าถึงผู้สมัครงานคุณภาพ ในประเทศไทยกว่า 3.1 ล้านคน*</h4>
      </div>
      <div class="col">
        <h2 class="h">พันธมิตรที่คุณไว้วางใจ</h2>
        <h4>ได้รับความไว้วางใจ จากผู้ประกอบการ ทั่วโลกกว่า 1 ล้านราย</h4>
      </div>
      <div class="col">
        <h2 class="h">ตอบโจทย์ทุกการสรรหา</h2>
        <h4>ผู้ดูแลบัญชีและเครื่องมือ ที่พร้อม ช่วยเหลือคุณ</h4>
      </div>
    </div>
  </div>


</div>
<!-- Include Bootstrap JS and jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

 
</body>
</html>
