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


    public function manage_luggage(Request $request, $id='')
    {
        if($id>0){
            $arr= Luggage::where(['id'=>$id])->get();
            $result['traveller_name']=$arr['0']->traveller_name;
            $result['traveller_passport_number']=$arr['0']->traveller_passport_number;
            $result['luggage_serial_number']=$arr['0']->luggage_serial_number;
            $result['number_of_luggage']=$arr['0']->number_of_luggage;
            $result['luggage_type']=$arr['0']->luggage_type;
            $result['id']=$arr['0']->id;

        }else{
            $result['traveller_name']='';
            $result['traveller_passport_number']='';
            $result['luggage_serial_number']='';
            $result['number_of_luggage']='';
            $result['luggage_type']='';
            $result['id']='';
        }
        return view('admin/manage_luggage', $result );

    }


    public function add_luggage(Request $req)
    {

        // $req->validate([
        //     ' traveller_name'=> 'required',
        //     'traveller_passport_number'=> 'required',
        //     'luggage_serial_number'=> 'required',
        //     'number_of_luggage'=> 'required',
        //     'luggage_type'=> 'required',
        // ]);

            if($req->post('id')>0){
                $model= Luggage::find($req->post('id'));
                $msg='Luggage Information Updated Succesfully';
            }else{
                $model = new Luggage();
                $msg='Luggage Information Added Succesfully';
            }

            $model->traveller_name  =$req->post('traveller_name');
            $model->traveller_passport_number  =$req->post('traveller_passport_number');
            $model->luggage_serial_number  =$req->post('luggage_serial_number');
            $model->number_of_luggage  =$req->post('number_of_luggage');
            $model->luggage_type =$req->post('luggage_type');
            $model->save();

            $req->session()->flash('success', $msg);
            return redirect('admin/luggage');

    }
    public function delete(Request $req, $id)
    {
        $model = Luggage::find($id);
        $model->delete();
        $req->session()->flash('success', 'Luggage Deleted Successfully');
        return redirect('admin/luggage');
    }



}
