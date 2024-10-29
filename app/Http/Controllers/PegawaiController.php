<?php

namespace App\Http\Controllers;

use App\Models\Pegawai;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;

class PegawaiController extends Controller
{
    public function index()
    {
        $pegawai = Pegawai::all();
        return view('pegawai', ['pegawai' => $pegawai]);
    }

    public function cetak_pdf()
    {
        $pegawai = Pegawai::all();

        $pdf = Pdf::loadview('pegawai_pdf', ['pegawai' => $pegawai]);
        return $pdf->stream();
    }
}
