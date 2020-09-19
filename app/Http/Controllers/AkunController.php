<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\Akun;

class AkunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Halaman Akun";
        $akun = Akun::orderBy('id_akun', 'desc')->get();
        return view('dasboard.akun', compact('akun'))->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $title = "Halaman Tambah Akun";
        return view('akun.create')->with('title', $title);
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
            'nama_akun'=>'required',      
            'sub_akun'=>'required',
            'sub_akun1'=>'required',
            'kode_akun'=>'required'
        ]);

        $akun = new Akun([
            'nama_akun' => $request->input('nama_akun'),
            'sub_akun' => $request->input('sub_akun'),
            'sub_akun1' => $request->input('sub_akun1'),
            'kode_akun' => $request->input('kode_akun')
        ]);

        $akun->save();

        return redirect()->route('akun.index')->with('success','Data Berhasil di Tambah');
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
        $akun = Akun::find($id);
        $title = "Halaman Edit Akun";
        return view('akun.edit', compact('akun'))->with('title', $title);
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
        $this->validate($request,[
            'nama_akun' => 'required',
            'kode_akun' => 'required',
            'sub_akun' => 'required',
            'sub_akun1' => 'required'
        ]);

        $akun = Akun::find($id);
        $akun->nama_akun = $request->input('nama_akun');
        $akun->kode_akun = $request->input('kode_akun');
        $akun->sub_akun = $request->input('sub_akun');
        $akun->sub_akun1 = $request->input('sub_akun1');
        $akun->save();

        return redirect()->route('akun.index')->with('success','Data Berhasil di Edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Akun::find($id);
        $post->delete();

        return redirect()->route('akun.index')->with('success','Data Berhasil di Hapus');
    }
}
