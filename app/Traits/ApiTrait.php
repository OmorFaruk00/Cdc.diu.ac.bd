<?php

namespace App\Traits;

use Illuminate\Support\Facades\Cache;

trait ApiTrait
{
    public static function ssl()
    {
        return stream_context_create(
            [
                'ssl' => [
                    'verify_peer' => false,
                    'verify_peer_name' => false,
                ],
            ]
        );
    }

    public function sliderData()
    {

        if (Cache::has('sliders')) {
            return Cache::get('sliders');
        }

        $data_result = json_decode(@file_get_contents('' . env('API_URL') . '/sliders/cdc', false, self::ssl()));

        if (!empty($data_result)) {
            Cache::put('sliders', $data_result, 1440); //1440 minute = 1 day
            return $data_result;
        }
        return response()->json(NULL, 404);
    }
    public function eventData()
    {
        if (Cache::has('events')) {
            return Cache::get('events');
        }

        $data_result = json_decode(@file_get_contents('' . env('API_URL') . '/events/cdc', false, self::ssl()));

        if (!empty($data_result)) {
            Cache::put('events', $data_result, 1440); //1440 minute = 1 day
            return $data_result;
        }
        return response()->json(NULL, 404);
    }

    public function aboutData()
    {
        if (Cache::has('about')) {
            return Cache::get('about');
        }

        $data_result = json_decode(@file_get_contents('' . env('API_URL') . '/about/cdc', false, self::ssl()));

        if (!empty($data_result)) {
            Cache::put('about', $data_result, 1440); //1440 minute = 1 day
            return $data_result;
        }
        return response()->json(NULL, 404);
    }
    public function objectiveData()
    {
        if (Cache::has('objectives')) {
            return Cache::get('objectives');
        }

        $data_result = json_decode(@file_get_contents('' . env('API_URL') . '/objectives/cdc', false, self::ssl()));

        if (!empty($data_result)) {
            Cache::put('objectives', $data_result, 1440); //1440 minute = 1 day
            return $data_result;
        }
        return response()->json(NULL, 404);
    }
    public function teamData()
    {
        if (Cache::has('teams')) {
            return Cache::get('teams');
        }

        $data_result = json_decode(@file_get_contents('' . env('API_URL') . '/teams/cdc', false, self::ssl()));

        if (!empty($data_result)) {
            Cache::put('teams', $data_result, 1440); //1440 minute = 1 day
            return $data_result;
        }
        return response()->json(NULL, 404);
    }
}
