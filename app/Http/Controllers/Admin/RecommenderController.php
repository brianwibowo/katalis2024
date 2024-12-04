<?php

namespace App\Http\Controllers\Admin;

use App\Exports\PredictionExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class RecommenderController extends Controller
{
    public function index()
    {
        return view('admin.recommender');
    }
    
    public function predict(Request $request)
    {
        // Ambil data dari input pengguna (sensor data)
        $inputData = $request->all();

        // Panggil AI model untuk memproses data
        $aiResult = $this->callAI($inputData);

        // Format hasil AI dan input data menjadi struktur yang sesuai
        $prediction = [
            'Crop' => $aiResult['predicted_crop'],
            'Parameters' => $aiResult['parameters']
        ];

        // Menyimpan hasil prediksi dalam session
        session(['prediction' => $prediction]);

        return view('admin.recommender.result', compact('prediction'));
    }

    private function callAI($inputData)
    {
        // Simulasi pemanggilan AI
        return [
            'predicted_crop' => 'Tomato',
            'parameters' => [
                'N' => ['value' => 3.5, 'mean' => 5.0, 'status' => 'Optimal'],
                'P' => ['value' => 1.2, 'mean' => 4.5, 'status' => 'Warning'],
            ]
        ];
    }

    public function generateReport()
    {
        // Ambil hasil prediksi
        $prediction = session('prediction');

        if (!$prediction) {
            return redirect()->route('admin.recommender')->with('error', 'No prediction data available.');
        }

        // Download Excel
        return Excel::download(new PredictionExport($prediction), 'prediction_results.xlsx');
    }

    public function downloadImage()
    {
        // Buat gambar dari hasil prediksi (misalnya berupa chart)
        $image = Image::canvas(800, 600, '#fff')
                      ->text('Predicted Crop: ' . session('prediction')['Crop'], 100, 100, function($font) {
                          $font->size(48);
                          $font->color('#000');
                          $font->align('center');
                          $font->valign('middle');
                      });

        // Simpan gambar sementara
        $path = storage_path('app/public/prediction_image.jpg');
        $image->save($path);

        // Return file download
        return response()->download($path)->deleteFileAfterSend(true);
    }
}


