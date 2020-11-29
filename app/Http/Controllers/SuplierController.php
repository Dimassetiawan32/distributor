<?php

namespace App\Http\Controllers;
use App\Suplier;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class SuplierController extends Controller
{
    public function __construct()
    {
        $this->suplier = new Suplier ();
    }

    public function index()
    {
        $supliers = Suplier::all();

        return view("suplier.index", compact('supliers'));
    }

    public function create()
    {
        $getKode = $this->suplier->generateCode();
        return view("suplier.create", compact('getKode'));
    }

    public function store()
    {
        $suplier = Suplier::create($this->validateRequest());
        $this->storeImage($suplier);
        return redirect()->back()->with(['success' => 'Suplier Berhasil Ditambahkan']);
    }

    private function validateRequest()
    {
        return tap(request()->validate([
            'kode_suplier'      => 'required',
            'nama_suplier'      => 'required',
            'pemimpin'          => 'required',
            'images'            => 'file|image|max:5000',
            'jenis_produksi'    => 'required',
            'alamat'            => 'required',
            'email'             => 'required',
            'no_telpon'         => 'required',      
            'keterangan'         => 'required',      
        ]), function(){
            if(request()->hasFile('images')){
                request()->validate([
                    'images' => 'file|image|max:5000',
                ]);
            }
        });
    }

    private function storeImage($suplier){
        if(request()->has('images')){
            $suplier->update([
                'images' => request()->images->store('uploads','public'),
            ]);
            $image = Image::make(public_path('storage/'. $suplier->images))->fit(300,300, null, 'top-left');

            $image->save();
        }
    }
    public function edit($id)
    {
        
        $suplier = Suplier::findOrFail($id);
        return view("suplier.edit", compact('suplier'));
    }
    
    public function update(Suplier $suplier)
    {
        $suplier->update($this->validateRequest());
        $this->storeImage($suplier);
        return redirect()->back()->with(['success' => 'Data Barang Berhasil Diperbarui']);
    }

    public function show($id)
    {
        $suplier = Suplier::findOrFail($id);
        return view("suplier.show", compact('suplier'));
    }
    
    public function destroy(Suplier $suplier)
    {
        $suplier->delete();

        if(\File::exists(public_path('storage/'. $suplier->images))){
            \File::delete(public_path('storage/'. $suplier->images));
        }

        return redirect()->back()->with(['success' => 'Data Suplier berhasil di hapus']);
    }
}
