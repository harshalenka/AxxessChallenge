<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patientDetails;
use Carbon\Carbon;

class patientEntryForm extends Controller
{
    //
    function save(Request $req){
        $temp=explode("-",$req->start_date);
        $start_dat=Carbon::create($temp[0],$temp[1],$temp[2]);
        $deadline=$start_dat->addMonths(3);
        print("Success!!");
        $patient=new patientDetails;
        $patient->name=$req->name;
        $patient->age=$req->age;
        $patient->phone=$req->phone;
        $patient->start_date=$req->start_date;
        $patient->follow_up=$req->follow_up;
        $patient->deadline=$deadline;
        $patient->save();
      }

      function visitDeadlineInfo(){
        $data=patientDetails::all();
      return view('visitDeadline',['data'=>$data]);
      }
}
