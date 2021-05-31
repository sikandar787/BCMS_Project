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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function manage_departments(Request $req)
    {
        return view('admin.manage_departments');


        // return view('admin/departments/manage_departments');
    }

        public function delete_deparments(Request $request, $id)
    {
        $model = Department::find($id);
        $model->delete();
        $request->session()->flash('message','Department Information Deleted');
        return redirect('admin/departments');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function add_departments(Request $req)
    {
        $model= new Department();
        $model->dep_name= $req->post('dep_name');
        $model->email= $req->post('email');
        $model->password= $req->post('password');
        $model->dep_type_id= $req->post('dep_type_id');
        $model->status= $req->post('status');
        $model->save();
        $req->session()->flash('success', 'Department Added Successfully');
        return redirect('admin/departments/manage_departments');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
      return view('admin/departments/manage_departments', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Department $department)
    {
        // $department->update($request->all());
        return view('admin.departments.editdepartment');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        //
    }
}
