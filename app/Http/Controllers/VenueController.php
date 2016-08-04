<?php

namespace hs\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use hs\Http\Requests;
use hs\Http\Controllers\Controller;

class VenueController extends Controller
{
    
    public function index()
    {
        $result = DB::table('venue')->paginate(10);
        return view('content.venue')
            ->with('data',$result);
    }
    public function form()
    {
        $result = DB::table('venue')->get();
        return view('content.venue_form');
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        $post=$request->all();
        $v = \Validator::make($request->all(),
            [
                'venue_name' => 'required|max:25',
                'venue_location' => 'required|max:25',
      
            ],[
            //'required' => ':attribute Harus diisi.',
            //'confirmed' => 'Password not match.',
            ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors())->withInput();
        }else{
            $data = array(
                'venue_name' => $post['venue_name'],
                'venue_location' => $post['venue_location'],
                
            );

            $i = DB::table('venue')->insert($data);
            if($i>0){
                \Session::flash('message','<div class="text-center alert alert-success">Data has saved</div>');
                return redirect('venue');
            }
        }
    }

    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $result = DB::table('venue')->where('id',$id)->first();
        return view('content.venue_form')->with('data',$result); 
    }

    public function update(Request $request)
    {
        $post=$request->all();
        $v = \Validator::make($request->all(),
            [
                'venue_name' => 'required|max:25',
                'venue_location' => 'required|max:25',
                
            ],[
            //'required' => ':attribute Harus diisi.',
            //'confirmed' => 'Password not match.',
            ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }else{
            $data = array(
                'venue_name' => $post['venue_name'],
                'venue_location' => $post['venue_location'],
            );

            $i = DB::table('venue')->where('id',$post['id'])->update($data);
            if($i>0){
                \Session::flash('message','<div class="text-center alert alert-success">Update has been success</div>');
                return redirect('venue');
            }else{
                return 'gagal';
            }
        }
    }

    public function destroy($id)
    {
        $i = DB::table('venue')->where('id',$id)->delete();
         if($i>0){
            \Session::flash('message','<div class="text-center alert alert-success">Data berhasil dihapus</div>');
            return redirect('venue');
         }
    }
}
