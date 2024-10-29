<?php

namespace App\Http\Controllers;

use App\Exports\SiswaExport;
use App\Imports\SiswaImport;
use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Facades\Excel;

class SiswaController extends Controller
{
    public function index()
    {
        $siswa = Siswa::all();
        return view('siswa', ['siswa' => $siswa]);
    }

    public function export_excel()
    {
        return Excel::download(new  SiswaExport, 'siswa.xlsx');
    }

    public function import_excel(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'file' => 'required|mimes:xls,xlsx',
        ]);

        if ($validator->fails()) {
            return redirect()->back()
                             ->withErrors($validator)
                             ->withInput();
        }

        $file = $request->file('file');
        $nama_file = rand() . '_' . $file->getClientOriginalName();

        $file->move('file_siswa', $nama_file);

        Excel::import(new SiswaImport, public_path('/file_siswa/' . $nama_file));

        Session::flash('sukses', 'data siswa berhasi di import');

        return redirect('/siswa');
    }
}
