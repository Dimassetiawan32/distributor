<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Suplier extends Model
{
    protected $table = 'supliers';
    protected $guarded = [];

    public function generatecode()
    {
        $_kode       = "PT";
        $kode = Suplier::where('kode_suplier', 'PT')->orderBy('kode_suplier');
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
