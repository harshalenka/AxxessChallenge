<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\visitDetails;
use App\patientDetails;
use Carbon\Carbon;

class patientVisitForm extends Controller
{
    //
    function save(Request $req){
        $patient=new patientDetails;
        if($patient::find($req->patient_id)){
            $temp=explode("-",$req->visit_date);
            $visit=new visitDetails ;
            $visit->patient_id=$req->patient_id;
            $visit->visit_date=Carbon::create($temp[0],$temp[1],$temp[2]);
            $visit->save();
            print("sucess!!");
            $deadline=Carbon::create($temp[0],$temp[1],$temp[2])->addMonths(3);
            $patient::where('id',$req->patient_id)->update([
                "deadline"=>$deadline,
                "follow_up"=>"yes"
            ]);
        }
        else{
            print("Fail!!");
        }
      }

}
