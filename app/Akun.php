<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    //
    protected $table = "akun";
    protected $primaryKey = 'id_akun';
    protected $fillable = ['id_akun', 'kode_akun', 'nama_akun', 'sub_akun', 'sub_akun1'];

    public function kasumum()
    {
        return $this->hasOne('App\KasUmum');
    }
}
