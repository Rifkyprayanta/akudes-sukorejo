<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KasUmum extends Model
{
    protected $table = "kasumum";
    protected $primaryKey = 'id_kasumum';
    protected $fillable = ['id_kasumum','id_akun', 'tanggal', 'kredit', 'debit', 'saldo', 'keterangan'];

    public function akun()
    {
        return $this->belongsTo('App\Akun', 'id_akun');
    }
}
