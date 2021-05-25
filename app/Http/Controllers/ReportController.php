<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class ReportController extends Controller
{

    public function index()
    {
        return view('admin/medical_reports');

    }


    public function manage_medical_reports()
    {
        return view('admin.manage_medical_reports');
    }

    public function manage_medical_reports_process(Request $request)
    {
       return ('Added Successfully');
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
