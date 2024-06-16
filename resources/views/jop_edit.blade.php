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
    <title>สมัครงาน</title>
</head>

<body>
    <form class="form-head" action="{{ route('jop.store') }}" method="POST" enctype="multipart/form-data">
        @if (Session::has('success'))
            <div class="alert alert-success">{{ Session::get('success') }}</div>
        @endif
        @if (Session::has('fail'))
            <div class="alert alert-danger">{{ Session::get('fail') }}</div>
        @endif
        @csrf
        <section class="form-body">
            <div class="form-head-1">
                <div class="form-group-1">
                    <div class="form-body">
                        <div class="form-head-1">
                            <div class="form-group-1">
                                <div class="form-group">
                                    <h3>ข้อมูลส่วนตัว</h3>
                                    <label for="entre_id">ใส่ ID</label>
                                    <input type="text" name="entre_id" class="form-control"
                                        placeholder="กรอก ID ของคุณ">
                                    <span class="text-danger">
                                        @error('entre_id')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                    <label for="name">ชื่อ-สกุล</label>
                                    <input type="text" name="name" class="form-control"
                                        placeholder="กรอกชื่อ-สกุล ของคุณ">
                                    <span class="text-danger">
                                        @error('name')
                                            {{ $message }}
                                        @enderror
                                    </span>
                                </div>
                                <br>
                                <label for="check_type">อาศัยใน:</label>
                                <select name="residence" id="residence">
                                    <option value= "">--อาศัยใน--</option>
                                    <option value="สหรัฐอเมริกา">สหรัฐอเมริกา</option>
                                    <option value="จีน">จีน</option>
                                    <!-- เพิ่มตัวเลือกอื่น ๆ ที่ถูกต้องตามคุณสมบัติของคุณ -->
                                </select>
                                <br><br>
                                <label for="nationality">สัญชาติ:</label>
                                <select name="nationality" id="nationality">
                                    <option value= "">--สัญชาติ--</option>
                                    <option value="สัญชาติอเมริกัน">สัญชาติอเมริกัน</option>
                                    <option value="สัญชาติจีน">สัญชาติจีน</option>
                                    <!-- เพิ่มตัวเลือกอื่น ๆ ที่ถูกต้องตามคุณสมบัติของคุณ -->
                                </select>
                                <br><br>
                                <label for="education_level">ระดับการศึกษาสูงสุด:</label>
                                <select name="education_level" id="education_level">
                                    <option value= "">--ระดับการศึกษาสูงสุด--</option>
                                    <option value="ปริญญาตรี">ปริญญาตรี (Bachelor's Degree)</option>
                                    <option value="ปริญญาโท">ปริญญาโท (Master's Degree)</option>
                                    <option value="ปริญญาเอก">ปริญญาเอก (Doctoral Degree)</option>
                                    <option value="ปริญญาเอกบรรจุ">ปริญญาเอกบรรจุ (Postdoctoral Fellowship)</option>
                                </select>
                                <br><br>
                                <h3>ข้อมูลติดต่อ</h3>
                                <br>
                                <label for="email">อีเมล</label>
                                <input type="text" name="email" class="form-control" placeholder="กรอกอีเมลของคุณ">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <br>
                                <label for="phone_number">เบอร์โทร</label>
                                <input type="text" name="phone_number" class="form-control"
                                    placeholder="กรอกเบอร์โทรของคุณ">
                                <span class="text-danger">
                                    @error('phone_number')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <br>
                                <label for="profilePicture">Portfolio</label>
                                <input type="file" name="profilePicture" id="profilePicture" accept="image/*">
                            </div>
                            <br>
                            <button type="submit" class="btn btn-block btn-success">
                                บันทึก
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </form>
</body>

</html>
