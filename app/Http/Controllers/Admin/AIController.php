<?php
namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Http;

class AIController extends Controller
{
    public function predict(Request $request)
    {
        // Data input dari form
        $data = $request->only(['N', 'P', 'K', 'Temperature', 'Humidity', 'ph']);

        // Endpoint FastAPI
        $response = Http::post('http://10.2.16.100:4430/predict/', $data);

        if ($response->ok()) {
            // Mengirim hasil prediksi ke view `result.blade.php`
            $result = $response->json();
            return view('admin.result', ['prediction' => $result]);
        } else {
            return back()->withErrors(['error' => 'Prediction failed, please check the server connection.']);
        }
    }
}

