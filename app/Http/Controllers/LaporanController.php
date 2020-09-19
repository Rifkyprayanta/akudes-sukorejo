<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\KasUmum;
use App\Akun;
use PDF;

class LaporanController extends Controller
{
    //
    public function index()
    {
        $title = "Laporan Kas Umum";
        $kasumum = KasUmum::orderBy('id_kasumum', 'desc')->get();
        return view('laporan.index', compact('kasumum'))->with('title', $title);
    }

    public function laporanakun()
    {
        $title = "Laporan Kas Akun";
        $akun = Akun::orderBy('id_akun', 'desc')->get();
        $kasumum = KasUmum::orderBy('id_kasumum', 'desc')->get();
        return view('laporan.kasakun', compact('kasumum', 'akun'))->with('title', $title);
    }

    public function tutupakun()
    {
 		return view('tutupakun.index');
    }

    public function prosestutupakun()
    {
 		DB::table('kasumum')->truncate();
 		return redirect()->route('dasboard.index')->with('success','Keseluruhan Data Kas Umum dan Kas Akun Terhapus');
    }

    public function caritanggal(Request $request)
    {
    	 $request->validate([
            'tanggal_awal'=>'required',
            'tanggal_akhir'=>'required'
        ]);

		$tanggal_awal = $request->input('tanggal_awal');
		$tanggal_akhir = $request->input('tanggal_akhir');

		$kasumum = KasUmum::join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->whereBetween('kasumum.tanggal', [$tanggal_awal, $tanggal_akhir])->get();
		$debit = DB::table('kasumum')->selectRaw('sum(debit) as total_debit')->whereBetween('kasumum.tanggal', [$tanggal_awal, $tanggal_akhir])->get();
		$kredit = DB::table('kasumum')->selectRaw('sum(kredit) as total_kredit')->whereBetween('kasumum.tanggal', [$tanggal_awal, $tanggal_akhir])->get();
		$saldo = DB::table('kasumum')->selectRaw('sum(debit) - sum(kredit) as total_saldo')->whereBetween('kasumum.tanggal', [$tanggal_awal, $tanggal_akhir])->get();
		$title = "Laporan Kas Umum";
		//return view('laporan.hasil', compact('kasumum', 'tanggal_awal', 'tanggal_akhir'))->with('title', $title);

		$pdf = PDF::loadview('laporan.hasil', compact('kasumum', 'tanggal_awal', 'tanggal_akhir', 'debit', 'kredit', 'saldo'))->setPaper('A4', 'landscape');
    	return $pdf->stream();

		// $pdf = PDF::loadview('laporan.hasil', ['kasumum'=>$kasumum])->setPaper('A4','potrait');
	 //    return $pdf->download('laporan.pdf');

		// $pdf = PDF::loadview('laporan.hasil',['kasumum'=>$kasumum])->with('title', $title);
		// return $pdf->download('laporan-kasumum-pdf');
    }

    public function caritanggalakun(Request $request)
    {
    	 $request->validate([
            'tanggal_awal'=>'required',
            'tanggal_akhir'=>'required', 
            'id_akun'=>'required'
        ]);

		$tanggal_awal = $request->input('tanggal_awal');
		$tanggal_akhir = $request->input('tanggal_akhir');
		$id_akun = $request->input('id_akun');

		$kasumum = KasUmum::join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('kasumum.id_akun', $id_akun)->whereBetween('kasumum.tanggal', [$tanggal_awal, $tanggal_akhir])->get();
		$debit = DB::table('kasumum')->selectRaw('sum(debit) as total_debit')->where('kasumum.id_akun', $id_akun)->whereBetween('kasumum.tanggal', [$tanggal_awal, $tanggal_akhir])->get();
		$kredit = DB::table('kasumum')->selectRaw('sum(kredit) as total_kredit')->where('kasumum.id_akun', $id_akun)->whereBetween('kasumum.tanggal', [$tanggal_awal, $tanggal_akhir])->get();
		$saldo = DB::table('kasumum')->selectRaw('sum(debit) - sum(kredit) as total_saldo')->where('kasumum.id_akun', $id_akun)->whereBetween('kasumum.tanggal', [$tanggal_awal, $tanggal_akhir])->get();
		$title = "Laporan Kas Akun";
		//return view('laporan.hasil', compact('kasumum', 'tanggal_awal', 'tanggal_akhir'))->with('title', $title);

		$pdf = PDF::loadview('laporan.hasil', compact('kasumum', 'tanggal_awal', 'tanggal_akhir', 'debit', 'kredit', 'saldo'))->setPaper('A4', 'landscape');
    	return $pdf->stream();
    }
}
