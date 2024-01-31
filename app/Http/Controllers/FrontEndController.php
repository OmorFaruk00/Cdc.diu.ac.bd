<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use App\Traits\ApiTrait;


class FrontEndController extends Controller
{
    use ApiTrait;


   
    public function index(){
       $sliders =  $this->sliderData();
       $events =  $this->eventData();
       $about =  $this->aboutData();
       $objectives =  $this->objectiveData();
       $teams =  $this->teamData();
        return view('index',compact('sliders','events','about','objectives','teams'));
        
    }


    public function traits_get_departmsents()
    {

        if (Cache::has('rms_departments')) {

            $result = Cache::get('rms_departments');
            return response()->json($result, 201);
        }


        $data_result = json_decode(@file_get_contents('' . env('RMS_API_URL') . '/get_deptartments', false, self::ssl()));

        if (!empty($data_result)) {

            Cache::put('rms_departments', $data_result, 1440); //1440 minute = 1 day

            return response()->json($data_result, 201);
        }
        return response()->json(NULL, 404);
    }
}
