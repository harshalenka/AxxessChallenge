<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

use Carbon\Carbon;

class missingVisitUpdate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'visit:update';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'updates the missing visits';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $visits =DB::table('patient_visits')->get();
        foreach($visits as $visit){
            $patient= DB::table('health_care')->where('id', $visit->patient_id)->first();
            $temp_v=explode("-",$visit->visit_date);
            $temp_deadlin=explode("-",$patient->deadline);
            $visit_dat=Carbon::create($temp_v[0],$temp_v[1],$temp_v[2]);
            $deadlin_dat=Carbon::create($temp_deadlin[0],$temp_deadlin[1],$temp_deadlin[2]);
            $deadlin_st_dat=Carbon::create($temp_deadlin[0],$temp_deadlin[1],$temp_deadlin[2])->subMonths(3);
            if($visit_dat>=$deadlin_dat || $visit_dat>=$deadlin_st_dat){
                DB::table('health_care')->where('id', $visit->patient_id)->update(['follow_up'=>"yes"]);
            }
            else{
                DB::table('health_care')->where('id', $visit->patient_id)->update(['follow_up'=>"missed"]);
            }

        }


    }
}
