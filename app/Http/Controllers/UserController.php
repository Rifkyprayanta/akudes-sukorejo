<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = "Halaman User";
        $user = User::orderBy('id_user', 'desc')->get();
        return view('dasboard.user', compact('user'))->with('title', $title);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $title = "Halaman Tambah User";
        return view('user.create')->with('title', $title);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $request->validate([
            'username'=>'required',
            'password'=>'required',
            'nama'=>'required',
            'jabatan'=>'required'
        ]);

        $user = new User([
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
            'nama' => $request->input('nama'),
            'jabatan' => $request->input('jabatan')
        ]);

        $user->save();

        return redirect()->route('user.index')->with('success','Data Berhasil di Tambah');
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
        $user = User::find($id);
        $title = "Halaman Edit User";
        return view('user.edit', compact('user'))->with('title', $title);
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
            'username' => 'required',
            'password' => 'required',
            'nama' => 'required',
            'jabatan' => 'required'
        ]);

        $user = User::find($id);
        $user->username = $request->input('username');
        $user->password = bcrypt($request->input('password'));
        $user->nama = $request->input('nama');
        $user->jabatan = $request->input('jabatan');
        $user->save();

        return redirect()->route('user.index')->with('success','Data Berhasil di Edit');
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
        $user = User::find($id);
        $user->delete();

        return redirect()->route('user.index')->with('success','Data Berhasil di Hapus');
    }
}
