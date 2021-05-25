<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('admin.login');

    }

    public function auth(Request $request)
    {
            $email=$request->post('email');
            $password=$request->post('password');
            $result=Admin::where(['email'=>$email, 'password'=>$password])->get();
            if(isset($result['0']->id ))
            {
                $request->session()->put('ADMIN_LOGIN', true);
                $request->session()->put('ADMIN_ID',$result['0']->id  );
                return redirect('admin/dashboard');

            }else
            {
                $request->session()->flash('error', 'Enter Valid Credentials');
                return redirect('admin');

            }
        }

        public function dashboard()
    {
        return view('admin.dashboard');

    }
    // public function updatepasword()
    // {
    //     $r=Admin::find(1);
    //     $r->passsword=Hash::make('admin');
    //     $r->save();

    // }

//     if(Hash::check($request->post('password'),$result->password))
//     {
//         $request->session()->put('ADMIN_LOGIN', TRUE);
//    $request->session()->put('ADMIN_ID',$result->id);
//    return redirect('admin/dashboard');
//     }else{
//         $request->session()->flash('error', 'Enter Correct Password');
//         return redirect('admin');
//     }


// $request->session()->flash('error', 'Enter Valid Credentials');
// return redirect('admin');
// }



}
