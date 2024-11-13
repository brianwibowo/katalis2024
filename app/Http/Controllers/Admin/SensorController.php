<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SensorData;

class SensorController extends Controller
{
    public function fetchSensorData(Request $request)
    {
        $date = $request->query('date');
        $sensorType = $request->query('sensor_type');

        // Ambil data berdasarkan tanggal dan jenis sensor
        $data = SensorData::whereDate('created_at', $date)
                          ->where('sensor_type', $sensorType)
                          ->get(['created_at', 'value']);

        return response()->json($data);
    }
}
