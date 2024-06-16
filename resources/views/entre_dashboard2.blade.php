<!DOCTYPE html>
<html lang="en">
{{-- //* shift + alt + f == จัดหน้าฟอร์ม**// --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="Entreprenur.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
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
            <li><a href="#">หน้าหลัก</a></li>
            <li><a href="{{ url('dashboard1') }}">ประกาศงาน</a></li>
            <li><a href="{{ url('job_applications') }}">ผู้สมัครงาน</a></li>
            <li><a href="#">กาตั้งค่า Account</a></li>
            <li><a href="#">ออกระบบ</a></li>
        </ul>
    </section>

   