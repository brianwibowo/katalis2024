<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    /**
     * Tampilkan halaman dashboard
     */
    public function index()
    {
        return view('admin.dashboard');
    }

    /**
     * Fungsi untuk Generate Report
     */
    public function generateReport(Request $request)
    {
        $sensor = $request->query('sensor');
        $node = $request->query('node');
        $date = $request->query('date');

        if (!$sensor || !$node || !$date) {
            return response()->json(['error' => 'Semua parameter harus diisi!'], 400);
        }

        $data = $this->fetchSensorData($sensor, $node, $date);

        if (empty($data['values'])) {
            return response()->json(['error' => 'Data tidak ditemukan untuk parameter yang dipilih!'], 404);
        }

        return response()->json([
            'labels' => $data['timestamps'],
            'values' => $data['values'],
            'description' => "Grafik $sensor di Node $node pada tanggal $date",
        ]);
    }

    private function fetchSensorData($sensor, $node, $date)
    {
        // Format tanggal awal dan akhir untuk 1 hari
        $startOfDay = "$date 00:00:00";
        $endOfDay = "$date 23:59:59";

        // Query database sesuai kebutuhan
        $data = DB::table('historical_data')
            ->where('sensor_type', $sensor)
            ->where('node_id', $node)
            ->whereBetween('timestamp', [$startOfDay, $endOfDay])
            ->orderBy('timestamp')
            ->get(['timestamp', 'value']); // Contoh mengambil kolom timestamp dan value

        // Format data untuk chart
        return [
            'timestamps' => $data->pluck('timestamp')->map(function ($ts) {
                return date('H:i', strtotime($ts)); // Format ke HH:MM
            })->toArray(),
            'values' => $data->pluck('value')->toArray(),
        ];
    }
}
