<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobApplication;

class JobApplicationController extends Controller
{
    public function index()
    {
    // ดึงข้อมูลผู้สมัครงานและส่งไปยัง View
    $jobApplications = JobApplication::all(); // เปลี่ยนเป็นชื่อ Model ของผู้สมัครงานที่คุณใช้
    return view('dashboard1', compact('jobApplications'));
    }

}
