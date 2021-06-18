<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result['data']= Payment::all();
        return view('admin/payments', $result);
    }

   public function manage_payments(Request $request, $id='')
   {
    if($id>0){
        $arr= Payment::where(['id'=>$id])->get();
        $result['officer_name']=$arr['0']->officer_name;
        $result['traveller_name']=$arr['0']->traveller_name;
        $result['passport_number']=$arr['0']->passport_number;
        $result['amount']=$arr['0']->amount;
        $result['description']=$arr['0']->description;
        $result['id']=$arr['0']->id;

    }else{
        $result['officer_name']='';
        $result['traveller_name']='';
        $result['passport_number']='';
        $result['amount']='';
        $result['description']='';
        $result['id']='';
    }
    return view('admin/manage_payments', $result );


   }
   public function add_payments(Request $req){
    if($req->post('id')>0){
        $model= Payment::find($req->post('id'));
        $msg='Payment Information Updated Succesfully';
    }else{
        $model = new Payment();
        $msg='Payment Information Added Succesfully';
    }

    $model->officer_name  =$req->post('officer_name');
    $model->traveller_name  =$req->post('traveller_name');
    $model->passport_number  =$req->post('passport_number');
    $model->amount  =$req->post('amount');
    $model->description =$req->post('description');
    $model->status  =1;
    $model->save();

    $req->session()->flash('success', $msg);
    return redirect('admin/payments');
   }
   public function delete(Request $req, $id)
    {
        $model = Payment::find($id);
        $model->delete();
        $req->session()->flash('success', 'Luggage Deleted Successfully');
        return redirect('admin/payments');
    }
    public function status(Request $request, $id)

    {
        $model=Payment::find($id);
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
        return redirect('admin/payments');
    }

}
