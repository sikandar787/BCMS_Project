<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ComplaintController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result= Complaint::all();

        return view('admin.complaints',  ['data'=>$result]);
    }

    public function manage_complaints()
    {
        return view('admin.manage_complaints');
    }

    public function add_complaints_process(Request $req)
    {



        $model = new Complaint();
        $model-> officer_name =$req->post('officer_name');
        $model-> traveller_name =$req->post('traveller_name');
        $model-> passport_number =$req->post('passport_number');
        $model-> description =$req->post('description');
        $model->save();

        // $req->validate([
        //     ' officer_name'=> 'required',
        //     'traveller_name'=> 'required',
        //     'passport_number'=> 'required',
        //     'description'=> 'required',
        // ]);

        $req->session()->flash('message', 'Complaint Registered Succesfully');

        return redirect('admin/complaints');
        // $complaint= new Complaint;
        // $complaint->officer_name = $req->officer_name;
        // $complaint->traveller_name= $req->traveller_name;
        // $complaint->passport_number = $req->traveller_number;
        // $complaint->description	 = $req->description;

        // $complaint->save();

    }
    public function delete(Request $request, $id)

    {
        $model=Complaint::find($id);
        $model -> delete();
        $request->session()->flash('message', 'Complaint Deleted Ssuccesfully');
        return redirect('admin/complaints');
    }



}
