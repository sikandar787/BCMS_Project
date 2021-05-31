<?php

namespace App\Http\Controllers;

use App\Models\Good;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

use Illuminate\Database\Eloquent\Model;
class GoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $result= Good::all();
        return view('admin.goods' , ['data'=>$result]);
    }

    public function manage_goods(Request $request, $id='')
    {
        // Edit Button
        if($id>0)
        {
            $arr= Good::where(['id'=>$id])->get();

            $result ['exporter_name'] =$arr['0']->exporter_name;
            $result ['impoter_name'] =$arr['0']->impoter_name;
            $result ['exporter_address'] =$arr['0']->exporter_address;
            $result ['impoter_address'] =$arr['0']->impoter_address;
            $result ['city'] =$arr['0']->city;
            $result ['zipcode'] =$arr['0']->zipcode;
            $result ['country'] =$arr['0']->country;
            $result ['product_name'] =$arr['0']->product_name;
            $result ['quantity'] =$arr['0']->quantity;
            $result ['goods_type'] =$arr['0']->goods_type;
            $result ['id'] =$arr['0']->id;
        }
        else
        {
            $result ['exporter_name'] ='';
            $result ['impoter_name'] ='';
            $result ['exporter_address'] ='';
            $result ['impoter_address'] ='';
            $result ['city'] ='';
            $result ['zipcode'] ='';
            $result ['country'] ='';
            $result ['product_name'] ='';
            $result ['quantity'] ='';
            $result ['goods_type'] ='';
            $result ['id'] =0;

        }

        return view('admin.manage_goods', $result);
    }
    public function add_goods(Request $req)
    {

        if($req->post('id')>0)
        {
            $model =Good::find($req->post('id'));
            $msg='Goods Information Updated';
        }
        else
        {
            $model = new Good();
            $msg='Goods Information Added';
        }
        $model-> exporter_name =$req->post('exporter_name');
        $model-> impoter_name =$req->post('impoter_name');
        $model-> exporter_address =$req->post('exporter_address');
        $model-> impoter_address =$req->post('impoter_address');
        $model-> city =$req->post('city');
        $model-> zipcode =$req->post('zipcode');
        $model-> country =$req->post('country');
        $model-> product_name =$req->post('product_name');
        $model-> quantity =$req->post('quantity');
        $model->save();

        $req->session()->flash('message', $msg);

        return redirect('admin/goods/manage_goods');


    }

    public function delete_goods(Request $req, $id)
    {
        $model = Good::find($id);
        $model->delete();
        $req->session()->flash('success', 'Goods Deleted Successfully');
        return redirect('admin/goods');
    }





}
