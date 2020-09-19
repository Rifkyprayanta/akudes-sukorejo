<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\KasUmum;
use App\Akun;

class KasUmumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Halaman Pengelolaan Kas Umum";
        $kasumum = KasUmum::orderBy('id_kasumum', 'desc')->get();
        $kredit = DB::table('kasumum')->selectRaw('sum(kredit) as total_kredit')->get();
        $debit = DB::table('kasumum')->selectRaw('sum(debit) as total_debit')->get();
        $saldo = DB::table('kasumum')->selectRaw('sum(debit) - sum(kredit) as total_saldo')->get();
        return view('kasumum.index', compact('kasumum', 'debit', 'kredit', 'saldo'))->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $akun = Akun::all();
        $title = "Halaman Tambah Kas Umum";
        return view('kasumum.create', compact('akun'))->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'id_akun'=>'required',
            'tanggal'=>'required',
            'kredit'=>'required',
            'debit'=>'required',
            'keterangan'=>'required'
        ]);

        $kasumum = new KasUmum([
            'id_akun' => $request->input('id_akun'),
            'tanggal' => $request->input('tanggal'),
            'kredit' => $request->input('kredit'),
            'debit' => $request->input('debit'),
            'keterangan' => $request->input('keterangan')
        ]);

        $kasumum->save();

        return redirect()->route('kasumum.index')->with('success','Data Berhasil di Tambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $kasumum = KasUmum::find($id);
        $selectedRole = KasUmum::first()->id_kasumum;
        $akun = Akun::all();
        $title = "Halaman Edit Kas Umum";
        return view('kasumum.edit', compact('kasumum', 'akun', 'selectedRole'))->with('title', $title);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $this->validate($request,[
            'id_akun'=>'required',
            'tanggal'=>'required',
            'kredit'=>'required',
            'debit'=>'required',
            'keterangan'=>'required'
        ]);

        $kasumum = KasUmum::find($id);
        $kasumum->id_akun = $request->input('id_akun');
        $kasumum->tanggal = $request->input('tanggal');
        $kasumum->kredit = $request->input('kredit');
        $kasumum->debit = $request->input('debit');
        $kasumum->keterangan = $request->input('keterangan');
        $kasumum->save();

        return redirect()->route('kasumum.index')->with('success','Data Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $post = KasUmum::find($id);
        $post->delete();

        return redirect()->route('kasumum.index')->with('success','Data Berhasil di Hapus');
    }
}
