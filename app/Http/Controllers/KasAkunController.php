<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\KasUmum;
use App\Akun;

class KasAkunController extends Controller
{
    //
    public function index()
    {
        $title = "Halaman Kas Dana Desa";
        $kasakun = KasUmum::join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%DD%')->orderBy('id_kasumum', 'desc')->get();
        $kredit = DB::table('kasumum')->selectRaw('sum(kredit) as total_kredit')->join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%DD%')->orderBy('id_kasumum', 'desc')->get();
        $debit = DB::table('kasumum')->selectRaw('sum(debit) as total_debit')->join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%DD%')->orderBy('id_kasumum', 'desc')->get();
        $saldo = DB::table('kasumum')->selectRaw('sum(debit) - sum(kredit) as total_saldo')->join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%DD%')->orderBy('id_kasumum', 'desc')->get();
        return view('kasakun.danadesa', compact('kasakun', 'kredit', 'debit', 'saldo'))->with('title', $title);
    }

    public function add()
    {
        $title = "Halaman Kas Anggaran Dana Desa";
        $kasakun = KasUmum::join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%AD%')->orderBy('id_kasumum', 'desc')->get();
        $kredit = DB::table('kasumum')->selectRaw('sum(kredit) as total_kredit')->join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%AD%')->orderBy('id_kasumum', 'desc')->get();
        $debit = DB::table('kasumum')->selectRaw('sum(debit) as total_debit')->join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%AD%')->orderBy('id_kasumum', 'desc')->get();
        $saldo = DB::table('kasumum')->selectRaw('sum(debit) - sum(kredit) as total_saldo')->join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%AD%')->orderBy('id_kasumum', 'desc')->get();
        return view('kasakun.add', compact('kasakun', 'kredit', 'debit', 'saldo'))->with('title', $title);
    }

    public function silpa()
    {
        $title = "Halaman Kas Anggaran SILPA";
        $kasakun = KasUmum::join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%SLP%')->orderBy('id_kasumum', 'desc')->get();
        $kredit = DB::table('kasumum')->selectRaw('sum(kredit) as total_kredit')->join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%SLP%')->orderBy('id_kasumum', 'desc')->get();
        $debit = DB::table('kasumum')->selectRaw('sum(debit) as total_debit')->join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%SLP%')->orderBy('id_kasumum', 'desc')->get();
        $saldo = DB::table('kasumum')->selectRaw('sum(debit) - sum(kredit) as total_saldo')->join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%SLP%')->orderBy('id_kasumum', 'desc')->get();
        return view('kasakun.silpa', compact('kasakun', 'kredit', 'debit', 'saldo'))->with('title', $title);
    }

    public function pad()
    {
        $title = "Halaman Kas Anggaran PAD";
        $kasakun = KasUmum::join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%PAD%')->orderBy('id_kasumum', 'desc')->get();
        $kredit = DB::table('kasumum')->selectRaw('sum(kredit) as total_kredit')->join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%PAD%')->orderBy('id_kasumum', 'desc')->get();
        $debit = DB::table('kasumum')->selectRaw('sum(debit) as total_debit')->join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%PAD%')->orderBy('id_kasumum', 'desc')->get();
        $saldo = DB::table('kasumum')->selectRaw('sum(debit) - sum(kredit) as total_saldo')->join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%PAD%')->orderBy('id_kasumum', 'desc')->get();
        return view('kasakun.pad', compact('kasakun', 'kredit', 'debit', 'saldo'))->with('title', $title);
    }

    public function dll()
    {
        $title = "Halaman Kas Anggaran DLL";
        $kasakun = KasUmum::join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%DLL%')->orderBy('id_kasumum', 'desc')->get();
        $kredit = DB::table('kasumum')->selectRaw('sum(kredit) as total_kredit')->join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%DLL%')->orderBy('id_kasumum', 'desc')->get();
        $debit = DB::table('kasumum')->selectRaw('sum(debit) as total_debit')->join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%DLL%')->orderBy('id_kasumum', 'desc')->get();
        $saldo = DB::table('kasumum')->selectRaw('sum(debit) - sum(kredit) as total_saldo')->join('akun', 'akun.id_akun', '=', 'kasumum.id_akun')->where('akun.kode_akun', 'LIKE', '%DLL%')->orderBy('id_kasumum', 'desc')->get();
        return view('kasakun.dll', compact('kasakun', 'kredit', 'debit', 'saldo'))->with('title', $title);
    }


    public function caridata()
    {
    	$title = "Laporan Kas Akun";
        $akun = Akun::orderBy('id_akun', 'desc')->get();
        return view('kasakun.kasakun', compact('akun'))->with('title', $title);
    }


    public function prosescaridata(Request $request)
    {
    	$title = "Laporan Kas Akun";
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

		return view('kasakun.caridata', compact('kasumum', 'tanggal_awal', 'tanggal_akhir', 'debit', 'kredit', 'saldo'))->with('title', $title);

		
    }
}
