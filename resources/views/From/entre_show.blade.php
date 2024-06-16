<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>รายละเอียดงาน</title>
</head>
<body>
    <h1>รายละเอียดงาน</h1>
    <div class="card">
        <div class="card-body">
            <h5 class="card-title">{{ $entreAdd->jobPosition }}</h5>
            <p class="card-text">{{ $entreAdd->jobDescription }}</p>
            <!-- เพิ่มข้อมูลอื่น ๆ ตามที่คุณต้องการแสดง -->
        </div>
    </div>
</body>
</html>
