<?php

namespace hs\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use hs\Http\Requests;
use hs\Http\Controllers\Controller;

class BookingController extends Controller
{
    public function index()
    {
        $result = DB::table('booking')->paginate(10);
        return view('content.booking')
            ->with('data',$result);
    }
    public function show($id)
    {
         $result = DB::table('booking')->where('id',$id)->first();
         $result2 = DB::table('users')->where('id',$result->id_user)->first();
         $result3 = DB::table('payment')->where('id',$result->id_payment)->first();
         $result4 = DB::table('tickets')->where('id_booking',$id)->get();
         $result5 = DB::table('show')->where('id_booking',$id)->get();

         return view('content.booking_show')
            ->with('booking',$result)
            ->with('user',$result2)
            ->with('payment',$result3)
            ->with('tickets',$result4)
            ->with('shows',$result5);
    }
    public function form()
    {
        $result = DB::table('payment')->get();
        $result2 =  ManipulationHsController::autonumber('booking','B','4');
        $result3 = DB::table('tickets_type')->get();
        $result4 = DB::table('venue')->get();
        $result5 = DB::table('seat')->get();
        $result6 = DB::table('users')->get();

        return view('content.booking_form')
        ->with('payment',$result)
        ->with('id_booking',$result2)
        ->with('tickets_type',$result3)
        ->with('venue',$result4)
        ->with('seat',$result5)
        ->with('user',$result6);
    }

    public function addTicket(Request $request)
    {
        $post=$request->all();
        $data = array(
            'id_booking' => $post['id_booking'],
            'ticketName' => $post['ticketName'],
            'id_ticket_type' => $post['id_ticket_type'],
        );

        //insert
        $i = DB::table('tickets')->insert($data);
        if($i>0){
             return 1;
        }else{
            return 0;
        }
    } 
    public function showTicket($id)
    {
        $display = "";
        $result = DB::table('tickets')->where('id_booking',$id)->get();
        foreach ($result as $data) {
            $display .= '<tr>
                        <td>'.$data->id_booking.'</td>
                        <td>'.$data->ticketName.'</td>
                        <td class="text-center" width="70px"><a data-id="'.$data->id.'" class="delete-ticket" href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                        <tr>';
        }
        $result2 = DB::table('tickets')->where('id_booking',$id)->count();
        if($result2 == 0){
            $display .= '<tr><td colspan="5" class="text-center">No data added</td></tr>';
        }
        return $display;
        exit();
    }
    public function destroyTicket(Request $request){
        $post=$request->all();
        $i = DB::table('tickets')->where('id',$post['id'])->delete();
         if($i>0){
            return 1;
        }else{
            return 0;
        }
    }

    public function addShow(Request $request)
    {
        $post=$request->all();
        $data = array(
            'id_booking' => $post['id_booking'],
            'show_name' => $post['show_name'],
            'id_venue' => $post['id_venue'],
            'id_seat' => $post['id_seat'],
        );

        //insert
        $i = DB::table('show')->insert($data);
        if($i>0){
             return 1;
        }else{
            return 0;
        }
    } 
    public function displayShow($id)
    {
        $display = "";
        $result = DB::table('show')->where('id_booking',$id)->get();
        foreach ($result as $data) {
            $display .= '<tr>
                        <td>'.$data->id_booking.'</td>
                        <td>'.$data->id_venue.'</td>
                        <td>'.$data->id_seat.'</td>
                        <td>'.$data->show_name.'</td>
                        <td class="text-center" width="70px"><a data-id="'.$data->show_name.'" class="delete-show" href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                        <tr>';
        }
        $result2 = DB::table('show')->where('id_booking',$id)->count();
        if($result2 == 0){
            $display .= '<tr><td colspan="5" class="text-center">No data added</td></tr>';
        }
        return $display;
        exit();
    }
    public function destroyShow(Request $request){
        $post=$request->all();
        $i = DB::table('show')->where('show_name',$post['show_name'])->delete();
         if($i>0){
            return 1;
        }else{
            return 0;
        }
    }

    public function addBooking(Request $request)
    {
        $post=$request->all();
        $v = \Validator::make($request->all(),
            [
                //'id_booking' => 'required',
                'booking_reference' => 'required',
                'id_user' => 'required',
                'id_payment' => 'required',
      
            ],[
            //'required' => ':attribute Harus diisi.',
            //'confirmed' => 'Password not match.',
            ]);
        if($v->fails()){
            return redirect()->back()->withErrors($v->errors())->withInput();
        }else{
            $data = array(
                'id' => $post['id_booking'],
                'booking_reference' => $post['booking_reference'],
                'id_user' => $post['id_user'],
                'id_payment' => $post['id_payment'],
            );

            //insert
            $i = DB::table('booking')->insert($data);
            if($i>0){
                \Session::flash('message','<div class="text-center alert alert-success">Data has saved</div>');
                return redirect('booking');
            }else{
                \Session::flash('message','<div class="text-center alert alert-danger">Data has saved</div>');
                return redirect('booking');

            }
            
        }
    } 

    
    public function destroy($id)
    {   
         DB::table('show')->where('id_booking',$id)->delete();
         DB::table('tickets')->where('id_booking',$id)->delete();
         DB::table('booking')->where('id',$id)->delete();

        \Session::flash('message','<div class="text-center alert alert-danger">Data has been delete</div>');
        return redirect('booking');
        
    }
}
