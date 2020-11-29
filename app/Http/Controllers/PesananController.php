<?php

namespace App\Http\Controllers;
use App\Pesanan;
use App\Listbarang;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function __construct()
    {
        $this->pesanan = new Pesanan ();
    }

    public function index()
    {
        $pesanans = Pesanan::all();
        $barangmasuks = Listbarang::all();
        return view("pesanan.index", compact('pesanans', 'barangmasuks'));
    }

    public function create()
    {
       
        return view("pesanan.create");
    }

    public function store(Request $request)
    {
       $this->validate($request, [
            'jumlah'            => 'required',
            'tanggal_pesan'     => 'required',
            'pemesan'           => 'required',
            'alamat_pemesan'    => 'required',
       ]);

       $pesanan = Pesanan::create([
           'jumlah'             => $request->jumlah,
           'tanggal_pesan'      => $request->tanggal_pesan,
           'pemesan'            => $request->pemesan,
           'alamat_pemesan'     => $request->alamat_pemesan,
       ]);

       $pesanan->save();
       return redirect()->back()->with(['success' => 'Barang Berhasil Dipesan']);

    }

    public function edit($id)
    {
        
        $pesanan = Pesanan::findOrFail($id);
        return view("pesanan.edit", compact('pesanan'));
    }
    
    public function update(Request $request, $id)
    {
        $pesanan = Pesanan::findOrFail($id);
        $pesanan->update($request->all());
        return redirect()->back()->with(['success' => 'Data Barang Berhasil Diperbarui']);
    }
    
    public function destroy(Pesanan $pesanan)
    {
        $pesanan->delete();

        return redirect()->back()->with(['success' => 'Data berhasil di hapus']);
    }

}

