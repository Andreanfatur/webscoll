<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF; // Impor Fasad PDF

class PdfController extends Controller
{
    public function generateLaporan() // Gunakan "generateLaporan" untuk Bahasa Indonesia
    {
        $data = [
            // Data Anda yang akan ditampilkan di PDF
        ];

        $pdf = PDF::loadView('laporan'); // Muat tampilan PDF
        return $pdf->download('laporan.pdf'); // Unduh PDF sebagai 'laporan.pdf'
    }
}
