<?php

namespace hs\Http\Controllers;

use DB;
use Illuminate\Http\Request;

use hs\Http\Requests;
use hs\Http\Controllers\Controller;

class UserController extends Controller
{

    public function index()
    {
        $result = DB::table('users')->paginate(10);
        return view('content.user')->with('data',$result);
    }

    public function form()
    {
        return view('content.user_form');
    }
    public function formChangePassword()
    {
        return view('content.user_change_password'); 
    }
    public function changePassword(Request $request)
    {
        $post=$request->all();
         $v = \Validator::make($request->all(),
            [
                'password_old' => 'required',
                'password' => 'required|confirmed|min:6',
                
            ],[
                'required' => ':attribute Harus diisi.',
                'confirmed' => 'Password not match.',
            ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors())->withInput();
        }else{
            $result = DB::table('users')->where('id',$post['id'])->first();
            if($result->password == bcrypt($post['password_old'])){

                 \Session::flash('message','<div class="text-center alert alert-success">password has been change</div>');
                 return redirect()->back()->withErrors($v->errors())->withInput();
            }else{
                \Session::flash('message','<div class="text-center alert alert-danger">'.$result->password.' Password '.brypt($post['password_old']).'not match</div>');
                 return redirect()->back()->withErrors($v->errors())->withInput();
            } 
        }
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $post=$request->all();
        $v = \Validator::make($request->all(),
            [
                'firstname' => 'required|max:25',
                'lastname' => 'required|max:25',
                'username' => 'required|max:15|min:4',
                'password' => 'required|confirmed|min:4',
                'address' => 'required',
                'town' => 'required',
                'country' => 'required',
                'postcode' => 'required',
                'email' => 'required|email|max:255|unique:users',
                
            ],[
            //'required' => ':attribute Harus diisi.',
            'confirmed' => 'Password not match.',
            ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors())->withInput();
        }else{
            $data = array(
                'firstname' => $post['firstname'],
                'lastname' => $post['lastname'],
                'username' => $post['username'],
                'password' => bcrypt($post['password']),
                'address' => $post['address'],
                'town' => $post['town'],
                'country' => $post['country'],
                'postcode' => $post['postcode'],
                'email' => $post['email'],
                
            );

            $i = DB::table('users')->insert($data);
            if($i>0){
                \Session::flash('message','<div class="text-center alert alert-success">Data has saved</div>');
                return redirect('user');
            }
        }
    }

    public function find(Request $request)
    {
        //
        $post=$request->all();
        $result = DB::table('users')->where('firstname','like', '%'.$post['firstname'].'%')->paginate(10);
        return view('content.user')->with('data',$result);
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        $result = DB::table('users')->where('id',$id)->first();
        return view('content.user_form')->with('data',$result); 
    }

    public function update(Request $request)
    {
        $post=$request->all();
        $v = \Validator::make($request->all(),
            [
                'id' => 'required',
                'firstname' => 'required|max:25',
                'lastname' => 'required|max:25',
                'username' => 'required|max:15|min:4',
                'password' => 'required|confirmed|min:4',
                'address' => 'required',
                'town' => 'required',
                'country' => 'required',
                'postcode' => 'required',
                'email' => 'required',
                
            ],[
            // 'required' => ':attribute Harus diisi.',
            // 'confirmed' => 'Password not match.',
            ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors());
        }else{
            $data = array(
                'firstname' => $post['firstname'],
                'lastname' => $post['lastname'],
                'username' => $post['username'],
                'password' => bcrypt($post['password']),
                'address' => $post['address'],
                'town' => $post['town'],
                'country' => $post['country'],
                'postcode' => $post['postcode'],
                'email' => $post['email'],
            );

            $i = DB::table('users')->where('id',$post['id'])->update($data);
            if($i>0){
                \Session::flash('message','<div class="text-center alert alert-success">Data berhasil diubah</div>');
                return redirect('user');
            }else{
                return 'gagal';
            }
        }
    }

    public function destroy($id)
    {
        $i = DB::table('users')->where('id',$id)->delete();
         if($i>0){
            \Session::flash('message','<div class="text-center alert alert-success">Data berhasil dihapus</div>');
            return redirect('user');
         }
    }
}
