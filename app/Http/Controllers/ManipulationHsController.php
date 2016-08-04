<?php

namespace hs\Http\Controllers;
use DB;
use Illuminate\Http\Request;

use hs\Http\Requests;
use hs\Http\Controllers\Controller;

class ManipulationHsController extends Controller
{

    public function index()
    {
        //
    }

    //prefix awalan
    //panjang karakter
    public static function autonumber($table,$prefix,$length){

        $users = DB::table($table)
                    ->orderBy('id', 'desc')
                    ->first();

        if(empty($users)){
                $number=1;
        }else{
                $row=$users;
                $number=intval(substr($row->id,strlen($prefix)))+1;
        }
        if($length>0)
                $create_id = $prefix.str_pad($number,$length,"0",STR_PAD_LEFT);
        else
                $create_id = $prefix.$number;
        return $create_id;
    }    

    public function checkDate()
    {
        //untuk mengecek tanggal  yang bentrok
        $row = hs\PesanKamar::all();
        $i=0;
        foreach ($row as $rec) {
            $i++;
            $start_date =  $rec->tgl_cekin;
            $end_date = $rec->tgl_cekout;   
            $start_custom ="2016-01-18";
            $end_custom = "2016-01-28";

            $start_date_str = strtotime($start_date);   
            $end_date_str = strtotime($end_date);
            $start_custom_str = strtotime($start_custom);
            $end_custom_str = strtotime($end_custom);

            if (($start_date_str <= $start_custom_str) && ($end_date_str >= $start_custom_str) || 
            ($start_date_str <= $end_custom_str) && ($end_date_str >= $end_custom_str)) {

                echo $i++." start ".$start_date.' - end '.$end_date;
                echo $i++." <br>start ".$start_custom.' - end '.$end_custom;
                //break;
            }
        }
        return 'tersedia';

        // $start_date =  "2016-01-06";
        // $end_date = "2016-01-15";    
        // $start_custom ="2016-01-20";
        // $end_custom = "2016-02-06";

        // $mulai_st = strtotime($start_date);  
     //    $akhir_st = strtotime($end_date);
  //    $from_user_st = strtotime($start_custom);
  //    $from_user_st2 = strtotime($end_custom);
        // if (($mulai_st <= $from_user_st) && ($akhir_st >= $from_user_st) || 
        // ($mulai_st <= $from_user_st2) && ($akhir_st >= $from_user_st2)) {
        //  echo "not available";
        // }else{
        //  echo "available";
        // }




        // $row = hs\pesanKamar::where('id','1')->first();
        // return $row->Kamar->jenis_kamar;
      //   foreach ($row as $rec) {
      //    echo $rec->pesanKamar->tgl_cekin;
         // }

        // $row = hs\PesanKamar::all();
     //    foreach ($row as $rec) {
     //     echo $rec->tgl_cekin;
        // }

        // $mulai = "2015-01-01";
        // $akhir="2015-02-02";
        // $waktuMulai = (is_string($mulai)?strtotime($mulai):$mulai);
        // $waktuAkhir = (is_string($akhir)?strtotime($akhir):$akhir);
        // $day = ((($waktuAkhir-$waktuMulai)/3600)/24);
        // echo $day;
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
