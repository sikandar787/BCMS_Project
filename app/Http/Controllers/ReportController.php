<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use illuminate\Support\Facades\Storage;
class ReportController extends Controller
{

    public function index()
    {
        $result['data']= Report::all();
        return view('admin/medical_reports' , $result);

    }


    public function manage_medical_reports()
    {
        return view('admin.manage_medical_reports');
    }

    public function store(Request $req)
    {
        // $data =new Report();
        // $file=$req->file;
        // $filename=time().'.'. $file->getClientOriginalName();
        // $req->file->move('assets', $filename);
        // $data->traveller_name  =$req->post('traveller_name');
        // $data->traveller_passport_number  =$req->post('traveller_passport_number');
        // $data->save();



        $data=new Report();
        if($req->file('file')){
            {
                $file=$req->file('file');
                $filename=time().'.'.$file->getClientOriginalExtension();
                $req->file->move('assets', $filename);
                $data->file= $filename;

            }
            $data->traveller_name=$req->traveller_name;
            $data->traveller_passport_number=$req->traveller_passport_number;
            $data->save();
            return redirect()->back();

        }

        // if($file= $req->file('file')){
        // $file=$req->file('file');
        // $filename=time().'.'. $file->getClientOriginalName();
        // if($file->move('assets', $filename)){

        // $data=new Report();
        // $data->traveller_name  =$req->post('traveller_name');
        // $data->traveller_passport_number  =$req->post('traveller_passport_number');
        // $data->file =$filename;
        // $data->save();
        // $req->session()->flash('insert','Report Added Successfully');
        // return redirect('admin/medical_reports/manage_medical_reports');
        //  };
        // // $req->file->move('assets/', $filename);
        // }





    }
    public function delete(Request $req, $id)
    {
        $model = Report::find($id);
        $model->delete();
        $req->session()->flash('success', 'Report Deleted Successfully');
        return redirect('admin/medical_reports');
    }

    public function view($id)
    {
        $data=Report::find($id);
        return view('admin.files.view', compact('data'));
    }

    public function show(Report $report)
    {
        //
    }


    public function edit(Report $report)
    {
        //
    }


    public function update(Request $request, Report $report)
    {
        //
    }


    public function destroy(Report $report)
    {
        //
    }
}
