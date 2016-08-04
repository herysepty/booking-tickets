<?php

namespace hs\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use hs\Http\Requests;
use hs\Http\Controllers\Controller;

class SeatController extends Controller
{
    

    public function index()
    {
        $result = DB::table('seat')->paginate(10);
        return view('content.seat')
            ->with('data',$result);
    }
    public function form()
    {
        $result = DB::table('seat')->get();
        return view('content.seat_form');
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        $post=$request->all();
        $v = \Validator::make($request->all(),
            [
                'seat_name' => 'required|max:25',
      
            ],[
            //'required' => ':attribute Harus diisi.',
            //'confirmed' => 'Password not match.',
            ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors())->withInput();
        }else{
            $data = array(
                'seat_name' => $post['seat_name'],
                
            );

            $i = DB::table('seat')->insert($data);
            if($i>0){
                \Session::flash('message','<div class="text-center alert alert-success">Data has saved</div>');
                return redirect('seat');
            }
        }
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $result = DB::table('seat')->where('id',$id)->first();
        return view('content.seat_form')->with('data',$result); 
    }

    public function update(Request $request)
    {
        $post=$request->all();
        $v = \Validator::make($request->all(),
            [
                'seat_name' => 'required',
                
            ],[
            //'required' => ':attribute Harus diisi.',
            //'confirmed' => 'Password not match.',
            ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }else{
            $data = array(
                //'ticketName' => $post['ticket_name'],
                'seat_name' => $post['seat_name'],
            );

            $i = DB::table('seat')->where('id',$post['id'])->update($data);
            if($i>0){
                \Session::flash('message','<div class="text-center alert alert-success">Update has been success</div>');
                return redirect('seat');
            }else{
                return 'gagal';
            }
        }
    }

    public function destroy($id)
    {
        $i = DB::table('seat')->where('id',$id)->delete();
         if($i>0){
            \Session::flash('message','<div class="text-center alert alert-success">Data berhasil dihapus</div>');
            return redirect('seat');
         }
    }
}
