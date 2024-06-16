<!DOCTYPE html>
<html lang="en">
{{-- //* shift + alt + f == จัดหน้าฟอร์ม**// --}}

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="entre_update.css">

    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> --}}
    <link rel="stylesheet" href="entre_update.css">

    <script src="https://cdn.ckeditor.com/4.16.1/standard/ckeditor.js"></script>
    </script>
    <title>Entrepreneur</title>
</head>

<body style="background-color: rgb(10, 15, 78)">
    <section class="navbar">
        <div class="logo">
            <h1>MyLogo</h1>
        </div>
        <ul>
            <li><a href="#">หน้าหลัก</a></li>
            <li><a href="{{ url('dashboard1') }}">ประกาศงาน</a></li>
            <li><a href="#">ผู้สมัครงาน</a></li>
            <li><a href="#">กาตั้งค่า Account</a></li>
            <li><a href="#">ออกระบบ</a></li>
        </ul>
    </section>
    <div class="container" style="width: 150px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Edit All</div>
                    <div class="card-body">
                        {{-- <a href="{{ url('add-staff') }}" class="btn btn-success btn-sm">Add staff</a> --}}
                        <div class="table-responsive" >
                            <table class="table" style="width: 150px">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>ตำแหน่งงาน</th>
                                        <th>ตำแหน่งงาน (ภาษาไทย)</th>
                                        <th>ประเภทธุรกิจ</th>
                                        <th>ประเภทงาน</th>
                                        <th>สถานที่ทำงานหลัก</th>
                                        <th>ระยะเวลาจ้างงาน</th>
                                        <th>รายละเอียดงาน</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($entreAdds as $entreAdd)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $entreAdd->jobPosition }}</td>
                                            <td>{{ $entreAdd->jobPositionThai }}</td>
                                            <td>{{ $entreAdd->subject }}</td>
                                            <td>{{ $entreAdd->topic }}</td>
                                            <td>{{ $entreAdd->chapter }}</td>
                                            <td>{{ $entreAdd->check_type }}</td>
                                            <td>{{ $entreAdd->jobDescription }}</td>

                                            <td>
                                                <a href="entre_show{{ $entreAdd->id }}" class="btn btn-info">View</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('entre_edit', $entreAdd->id) }}" class="btn btn-warning" style="background-color:rgb(230, 249, 18);color:rgb(0, 0, 0);margin:50px">Edit</a>
                                            </td>
                                            <td>
                                                <form action="{{ route('entre.delete', $entreAdd->id) }}" method="POST">
                                                    @csrf
                                                    <input name="_method" type="hidden" value="DELETE">
                                                    <button type="submit" class="btn btn-xs btn-danger btn-flat show_confirm"
                                                        data-toggle="tooltip" title="Delete" style="background-color:red">Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
</body>
<script type="text/javascript">
    $('.show_confirm').click(function(event) {
        var form = $(this).closest("form");
        var name = $(this).data("name");

        event.preventDefault();
        swal({
            title: 'Are you sure you want to delete this record?',
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            buttons: true,
            dangerModel: true,
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });
</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
