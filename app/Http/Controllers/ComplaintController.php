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

    public function manage_complaints(Request $request, $id='')
    {
        if($id>0){
            $arr= Complaint::where(['id'=>$id])->get();
            $result['officer_name']=$arr['0']->officer_name;
            $result['traveller_name']=$arr['0']->traveller_name;
            $result['passport_number']=$arr['0']->passport_number;
            $result['description']=$arr['0']->description;
            $result['id']=$arr['0']->id;
        }
        else{
            $result['officer_name']='';
            $result['traveller_name']='';
            $result['passport_number']='';
            $result['description']='';
            $result['id']=0;
        }
        return view('admin.manage_complaints', $result);
    }

    public function add_complaints(Request $req)
    {


        if($req->post('id')>0){
            $model =Complaint::find($req->post('id'));
            $ms='Complaint Updated Successfully';
        }else{
            $model = new Complaint();
            $ms='Complaint Added Successfully';
        }


        $model-> officer_name =$req->post('officer_name');
        $model-> traveller_name =$req->post('traveller_name');
        $model-> passport_number =$req->post('passport_number');
        $model-> description =$req->post('description');
        $model-> status =1;
        $model->save();

        // $req->validate([
        //     ' officer_name'=> 'required',
        //     'traveller_name'=> 'required',
        //     'passport_number'=> 'required',
        //     'description'=> 'required',
        // ]);

        $req->session()->flash('success', $ms);

        return redirect('admin/complaints/manage_complaints');
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

    public function status(Request $request, $id)

    {
        $model=Complaint::find($id);
        // return $model;
        if($model -> status == 1)
        {
        $model -> status=0;
        }
        else
        {
            $model -> status=1;
        }
        $model->save();
        $request->session()->flash('message', 'Complaint Status Updated');
        return redirect('admin/complaints');
    }

}
