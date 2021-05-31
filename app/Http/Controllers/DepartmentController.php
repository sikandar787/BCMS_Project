<?php

namespace App\Http\Controllers;

use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reslut= Department::all();
        return view('admin/departments', ['data'=>$reslut]);
    }


    public function manage_departments(Request $req,$id='')
    {
        if($id>0)
        {
            $arr= Department::where(['id'=>$id])->get();
            $result ['dep_name'] =$arr['0']->dep_name;
            $result ['email'] =$arr['0']->email;
            $result ['password'] =$arr['0']->password;
            $result ['dep_type_id'] =$arr['0']->dep_type_id;
            $result ['status'] =$arr['0']->status;
            $result ['id'] =$arr['0']->id;
        }
        else
        {
            $result ['dep_name'] ='';
            $result ['email'] ='';
            $result ['password'] ='';
            $result ['dep_type_id'] ='';
            $result ['status'] ='';
            $result ['id'] =0;

        }

        return view('admin.manage_departments', $result);
    }

        public function delete(Request $request, $id)
    {
        $model = Department::find($id);
        $model->delete();
        $request->session()->flash('message','Department Information Deleted');
        return redirect('admin/department');
    }


    public function add_departments(Request $req)
    {
        if($req->post('id')>0)
        {
            $model =Department::find($req->post('id'));
            $msg='Departments Information Updated';
        }
        else
        {
            $model = new Department();
            $msg='Departments Information Added';
        }
        $model->dep_name= $req->post('dep_name');
        $model->email= $req->post('email');
        $model->password= $req->post('password');
        $model->dep_type_id= $req->post('dep_type_id');
        $model->status= $req->post('status');
        $model->save();
        $req->session()->flash('success', $msg);
        return redirect('admin/departments/manage_departments');
    }


}
