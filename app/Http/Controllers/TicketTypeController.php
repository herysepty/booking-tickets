<?php

namespace hs\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use hs\Http\Requests;
use hs\Http\Controllers\Controller;

class TicketTypeController extends Controller
{

    public function index()
    {
        $result = DB::table('tickets_type')->paginate(10);
        return view('content.ticket_type')->with('data',$result);
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        $post=$request->all();
        $v = \Validator::make($request->all(),
            [
                'ticket_type' => 'required|max:25',
      
            ],[
            //'required' => ':attribute Harus diisi.',
            //'confirmed' => 'Password not match.',
            ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors())->withInput();
        }else{
            $data = array(
                'ticket_type' => $post['ticket_type'],
                
            );

            $i = DB::table('tickets_type')->insert($data);
            if($i>0){
                \Session::flash('message','<div class="text-center alert alert-success">Data has saved</div>');
                return redirect('ticket-type');
            }
        }
    }

    public function find(Request $request)
    {
        //
        $post=$request->all();
        $result = DB::table('tickets_type')->where('ticket_type','like', '%'.$post['ticket_type'].'%')->paginate(10);
        return view('content.ticket_type')->with('data',$result);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $result = DB::table('tickets_type')->where('id',$id)->first();
        return view('content.ticket_type_form')->with('data',$result); 
    }

    public function update(Request $request)
    {
        $post=$request->all();
        $v = \Validator::make($request->all(),
            [
                'id' => 'required',
                'ticket_type' => 'required',
                
            ],[
            //'required' => ':attribute Harus diisi.',
            //'confirmed' => 'Password not match.',
            ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }else{
            $data = array(
                'ticket_type' => $post['ticket_type'],
            );

            $i = DB::table('tickets_type')->where('id',$post['id'])->update($data);
            if($i>0){
                \Session::flash('message','<div class="text-center alert alert-success">Update has been success</div>');
                return redirect('ticket-type');
            }else{
                return 'gagal';
            }
        }
    }

    public function destroy($id)
    {
        $i = DB::table('tickets_type')->where('id',$id)->delete();
         if($i>0){
            \Session::flash('message','<div class="text-center alert alert-success">Data berhasil dihapus</div>');
            return redirect('ticket-type');
         }
    }
}