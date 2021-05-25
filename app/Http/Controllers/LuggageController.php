<?php

namespace App\Http\Controllers;

use App\Models\Luggage;
use Illuminate\Http\Request;

class LuggageController extends Controller
{

    public function index()
    {
        $result['data']= Luggage::all();
       return view('admin/luggage',$result);
    }


    public function manage_luggage()
    {
        return view('admin.manage_luggage');

    }


    public function mannage_luggage_process(Request $req)
    {

        // $req->validate([
        //     ' traveller_name'=> 'required',
        //     'traveller_passport_number'=> 'required',
        //     'luggage_serial_number'=> 'required',
        //     'number_of_luggage'=> 'required',
        //     'luggage_type'=> 'required',
        // ]);

            $model = new Luggage();
            $model->traveller_name  =$req->post('traveller_name');
            $model->traveller_passport_number  =$req->post('traveller_passport_number');
            $model->luggage_serial_number  =$req->post('luggage_serial_number');
            $model->number_of_luggage  =$req->post('number_of_luggage');
            $model->luggage_type =$req->post('luggage_type');
            $model->save();

            $req->session()->flash('success', 'Luggage has added Succesfully');
            return redirect('admin/luggage/manage_luggage');

    }
    public function delete(Request $req, $id)
    {
        $model = Luggage::find($id);
        $model->delete();
        $req->session()->flash('success', 'Luggage Deleted Successfully');
        return redirect('admin/luggage');
    }



}
