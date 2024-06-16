<?php

namespace App\Http\Controllers;

use App\Models\EntreAdd;
use App\Models\JobApplication;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Entrepreneur;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Crypt;

class LoginController extends Controller
{
    public function registration()
    {
        // return "Login";
        return view('Login.registration', );
    }

    public function registrationUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|'
        ]);

        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = ($request->password); // แฮชรหัสผ่าน
        $answer = $user->save();
        // Hash::make
        if ($answer) {
            return back()->with('success', 'You have logged in successfully.');
        } else {
            return back()->with('fail', 'Something went wrong.');
        }
    }

    //**************** */ Login /**********************//

    public function login()
    {
        return view('Login.login');
    }

    public function loginUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $user = User::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginUser', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('fail', 'Password not match.');
            }
        } else {
            return back()->with('fail', 'this email is not registration.');
        }

    }

    public function dashboard(Request $request)
    {
        $entre_adds = EntreAdd::all();
        if (Session::has('loginUser')) {
            return view("user.dashboard", compact('entre_adds'));
        } else {
            return "125353";
        }
    }

    /*****************************LogOut ********************************** */
    public function DestroyLogout($id)
    {
        $profile = User::find($id);
        $profile->delete();

        if (Session::has('loginUser')) {
            Session::pull('loginUser');
            return redirect('login');
        }
        return view('login');

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }



    /***********************login Entrepreneur*********************** */


    public function entre_regis()
    {
        return view('Login.entrepregis');
    }

    public function entreUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'company' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|'
        ]);

        $user = new Entrepreneur();
        $user->name = $request->name;
        $user->company = $request->company;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->password = ($request->password); // แฮชรหัสผ่าน
        $answer = $user->save();

        if ($answer) {
            return back()->with('success', 'You have logged in successfully.');
        } else {
            return back()->with('fail', 'Something went wrong.');
        }
    }

    public function entrelogin()
    {

        return view('Login.entreplogin');
    }

    public function entrepreneurUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);
        $user = Entrepreneur::where('email', '=', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('entrepreneurUser', $user->id);
                return redirect('entre_dashboard2');
            } else {
                return back()->with('fail', 'Password not match.');
            }
        } else {
            return back()->with('fail', 'this email is not registration.');
        }

    }

    public function dashboard1()
    {
        if (Session::has('entrepreneurUser')) {
            return view("entre_dashboard2");
        } else {
            return "125353";
        }
    }

    // public function searchWork(Request $request)
    // {
    //     if($request->search){
    //         $searchWork = EntreAdd::where('jobPositionThai','LIKE','%'.$request->search)->latest()->paginate(15);
    //         return view ('');
    //     }else{


    //     }


    // }



    /*****************************  Entrepreneur   ******************************** */

    public function entreCreate()
    {
        return view('dashboard1');
    }
    //ดึงข้อมูลมาทั้งหมด//
    public function allConcerts()
    {
        $entre_adds = EntreAdd::all();
        return view('.ConcertAll', ['entre_adds' => $entre_adds]);
    }

    public function entreStore(Request $request)
    {
        $entre_id = $request->input('entre_id');
        $jobPosition = $request->input('jobPosition');
        $jobPositionThai = $request->input('jobPositionThai');
        $subject = $request->input('subject');
        $topic = $request->input('topic');
        $chapter = $request->input('chapter');
        $check_type = $request->input('check_type');
        $jobDescription = $request->input('jobDescription');

        // สร้างรายการใหม่ในตาราง 'entre_adds'
        $entreAdd = new EntreAdd();
        $entreAdd->entre_id = $entre_id;
        $entreAdd->jobPosition = $jobPosition;
        $entreAdd->jobPositionThai = $jobPositionThai;
        $entreAdd->subject = $subject;
        $entreAdd->topic = $topic;
        $entreAdd->chapter = $chapter;
        $entreAdd->check_type = $check_type;
        $entreAdd->jobDescription = $jobDescription;
        $entreAdd->save();

        return redirect('entre_index')->with('success', 'บันทึกข้อมูลเรียบร้อย');
    }

    public function entreEdit()
    {

        return view('entre_dashboard2');
    }



    /*****************entreUpdate*********************** */




    public function entre_index()
    {
        $entreAdds = EntreAdd::all();
        return view('entre_update', compact('entreAdds'));
    }

    //Show
    public function entre_show($id)
    {
        $entreAdd = EntreAdd::find($id);
        return view('From.entre_show', compact('entreAdd'));
    }


    public function update(Request $request, $id)
    {
        // ค้นหาข้อมูลที่ต้องการอัปเดต
        $entreAdd = EntreAdd::find($id);

        if (!$entreAdd) {
            // ถ้าไม่พบข้อมูล ให้เปลี่ยนเส้นทางไปหน้าอื่นหรือทำสิ่งที่คุณต้องการ
            return redirect()->route('entre_dashboard2')->with('fail', 'ไม่พบรายการที่ต้องการแก้ไข');
        }

        // ดึงข้อมูลจากคำขอ
        $jobPosition = $request->input('jobPosition');
        $jobPositionThai = $request->input('jobPositionThai');
        $subject = $request->input('subject');
        $topic = $request->input('topic');
        $chapter = $request->input('chapter');
        $check_type = $request->input('check_type');
        $jobDescription = $request->input('jobDescription');

        // อัปเดตข้อมูลในรายการที่คุณค้นพบ
        $entreAdd = new JobApplication; 
        $entreAdd->jobPosition = $jobPosition;
        $entreAdd->jobPositionThai = $jobPositionThai;
        $entreAdd->subject = $subject;
        $entreAdd->topic = $topic;
        $entreAdd->chapter = $chapter;
        $entreAdd->check_type = $check_type;
        $entreAdd->jobDescription = $jobDescription;
        $entreAdd->save();

        // หลังจากอัปเดตเสร็จ คุณสามารถเปลี่ยนเส้นทางไปหน้าอื่นหรือทำสิ่งที่คุณต้องการ
        return redirect()->route('entre_index')->with('success', 'อัปเดตข้อมูลสำเร็จ');
    }



    //Delete
    public function entre_destroy($id)
    {
        $entreAdd = EntreAdd::find($id);
        if ($entreAdd) {
            $entreAdd->delete();
            return back()->with('success', 'Record deleted successfully.');
        } else {

            return back()->with('error', 'Record not found.');
        }
    }


    public function entre_edit($id)
    {
        $entreAdd = EntreAdd::find($id);

        if (!$entreAdd) {
            return redirect()->route('entre_dashboard2')->with('fail', 'ไม่พบรายการที่ต้องการแก้ไข');
        }

        return view('entre_edit', compact('entreAdd'));
    }



    /********************  FORM-1.blade.php  ***************************** */

    public function form_1()
    {

        return view('User.form_1');
    }



    public function dash_search()
    {
        return view('dash_search');
    }

    /***************************************************************************** */



    public function store(Request $request)
    {
        // ตรวจสอบข้อมูลแบบฟอร์ม
        $products = JobApplication::latest()
            ->join('entre_adds', 'job_applications.id', '=', 'entre_adds.id');

        $typeProducts = EntreAdd::all();
        return view('User.form_1', compact('products', 'typeProducts'));
    }


    public function Stock(Request $request)
    {
        $name_id = $request->input('entre_id');
        $name = $request->input('name');
        $residence = $request->input('residence');
        $nationality = $request->input('nationality');
        $education_level = $request->input('education_level');
        $email = $request->input('email');
        $phone_number = $request->input('phone_number');
        $image_path = $request->input('image_path');



        $product = new JobApplication();
        $product->entre_id =  $name_id;
        $product->name = $name;
        $product->residence = $residence;
        $product->nationality =  $nationality;
        $product->education_level = $education_level;
        $product->email = $email;
        $product->phone_number= $phone_number;
        $product->image_path=  $image_path ;
        $product->save();


         return redirect()->route('entre_index')->with('success', 'อัปเดตข้อมูลสำเร็จ');

    }



    public function Jop_index()
    {
        // You can return a view for the login form
        return view('User.form_1');
    }

}