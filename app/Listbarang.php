<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Listbarang extends Model
{
    protected $table = 'barangmasuks';
    protected $guarded = [];

    public function generatecode()
    {
        $_kode       = "BRG";
        $kode = Listbarang::where('kode_barang', 'BRG')->orderBy('kode_barang');
        $kode = $kode->count();
        if($kode == 0){
        $kode = $_kode."001";
    }else
    {
        $last = $kode+1;
        $kode = "$_kode".str_pad($last, 3, '0', STR_PAD_LEFT);
    }
        return $kode;
    }
}
