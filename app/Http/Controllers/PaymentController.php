<?php

namespace hs\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use hs\Http\Requests;
use hs\Http\Controllers\Controller;

class PaymentController extends Controller
{


    public function index()
    {
        $result = DB::table('payment')->paginate(10);
        return view('content.payment')
            ->with('data',$result);
    }
    public function form()
    {
        $result = DB::table('payment')->get();
        return view('content.payment_form');
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        $post=$request->all();
        $v = \Validator::make($request->all(),
            [
                'invoice_number' => 'required|max:25',
                'payment_name' => 'required|max:25',
      
            ],[
            //'required' => ':attribute Harus diisi.',
            //'confirmed' => 'Password not match.',
            ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors())->withInput();
        }else{
            $data = array(
                'invoice_number' => $post['invoice_number'],
                'payment_name' => $post['payment_name'],
                
            );

            $i = DB::table('payment')->insert($data);
            if($i>0){
                \Session::flash('message','<div class="text-center alert alert-success">Data has saved</div>');
                return redirect('payment');
            }
        }
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $result = DB::table('payment')->where('id',$id)->first();
        return view('content.payment_form')->with('data',$result); 
    }

    public function update(Request $request)
    {
        $post=$request->all();
        $v = \Validator::make($request->all(),
            [
                'invoice_number' => 'required|max:25',
                'payment_name' => 'required|max:25',
                
            ],[
            //'required' => ':attribute Harus diisi.',
            //'confirmed' => 'Password not match.',
            ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }else{
            $data = array(
                'invoice_number' => $post['invoice_number'],
                'payment_name' => $post['payment_name'],
            );

            $i = DB::table('payment')->where('id',$post['id'])->update($data);
            if($i>0){
                \Session::flash('message','<div class="text-center alert alert-success">Update has been success</div>');
                return redirect('payment');
            }else{
                return 'gagal';
            }
        }
    }

    public function destroy($id)
    {
        $i = DB::table('payment')->where('id',$id)->delete();
         if($i>0){
            \Session::flash('message','<div class="text-center alert alert-success">Data berhasil dihapus</div>');
            return redirect('payment');
         }
    }
}
