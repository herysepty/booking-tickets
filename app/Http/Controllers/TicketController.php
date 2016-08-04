<?php

namespace hs\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use hs\Http\Requests;
use hs\Http\Controllers\Controller;

class TicketController extends Controller
{
    

    public function index()
    {
        $result = \hs\Ticket::paginate(10);
        return view('content.ticket')
            ->with('data',$result);
    }
    public function form()
    {
        $result = DB::table('tickets_type')->get();
        return view('content.ticket_form')
            ->with('data2',$result);
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        $post=$request->all();
        $v = \Validator::make($request->all(),
            [
                'ticket_name' => 'required|max:25',
                'id_ticket_type' => 'required',
      
            ],[
            //'required' => ':attribute Harus diisi.',
            //'confirmed' => 'Password not match.',
            ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors())->withInput();
        }else{
            $data = array(
                'ticketName' => $post['ticket_name'],
                'id_ticket_type' => $post['id_ticket_type'],
                
            );

            $i = DB::table('tickets')->insert($data);
            if($i>0){
                \Session::flash('message','<div class="text-center alert alert-success">Data has saved</div>');
                return redirect('ticket');
            }
        }
    }

    public function find(Request $request)
    {
        //
        $post=$request->all();
        $result = DB::table('tickets')->where('ticketName','like', '%'.$post['ticket_name'].'%')->paginate(10);
        return view('content.ticket')->with('data',$result);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $result = \hs\Ticket::where('id',$id)->first();
        $result2 = \hs\TicketType::all();
        return view('content.ticket_form')->with('data',$result)->with('data2',$result2); 
    }

    public function update(Request $request)
    {
        $post=$request->all();
        $v = \Validator::make($request->all(),
            [
                'ticket_name' => 'required',
                'id_ticket_type' => 'required',
                
            ],[
            //'required' => ':attribute Harus diisi.',
            //'confirmed' => 'Password not match.',
            ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }else{
            $data = array(
                //'ticketName' => $post['ticket_name'],
                'id_ticket_type' => $post['id_ticket_type'],
            );

            $i = \hs\Ticket::where('id',$post['id'])->update($data);
            if($i>0){
                \Session::flash('message','<div class="text-center alert alert-success">Update has been success</div>');
                return redirect('ticket');
            }else{
                return 'gagal';
            }
        }
    }

    public function destroy($id)
    {
        $i = DB::table('tickets')->where('id',$id)->delete();
         if($i>0){
            \Session::flash('message','<div class="text-center alert alert-success">Data berhasil dihapus</div>');
            return redirect('ticket');
         }
    }
}
