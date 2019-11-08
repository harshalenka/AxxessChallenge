<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\patientDetails;

class missedVisits extends Controller
{
    function list(){
        $patients = new patientDetails;
         return $patients::where("follow_up","missed")->get();
    }
}
