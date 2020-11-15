<?php

namespace App\Http\Controllers;
use App\Listbarang;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ListController extends Controller
{

    public function __construct()
    {
        $this->list = new ListBarang ();
    }

    public function index()
    {
        $barangmasuks = Listbarang::all();

        return view("list.index", compact('barangmasuks'));
    }

    public function create()
    {
        $getKode = $this->list->generateCode();
        return view("list.create", compact('getKode'));
    }

    public function store()
    {
        $list = Listbarang::create($this->validateRequest());
        $this->storeImage($list);
        return redirect()->back()->with(['success' => 'Barang Berhasil Ditambahkan']);
    }

    private function validateRequest()
    {
        return tap(request()->validate([
            'kode_barang'   => 'required',
            'nama'          => 'required',
            'harga'         => 'required',
            'stok'          => 'required',
            'tanggal'       => 'required',
            'images'        => 'file|image|max:5000',
            'keterangan'    => 'required',      
        ]), function(){
            if(request()->hasFile('images')){
                request()->validate([
                    'images' => 'file|image|max:5000',
                ]);
            }
        });
    }

    private function storeImage($list){
        if(request()->has('images')){
            $list->update([
                'images' => request()->images->store('uploads','public'),
            ]);
            $image = Image::make(public_path('storage/'. $list->images))->fit(300,300, null, 'top-left');

            $image->save();
        }
    }
    public function edit($id)
    {
        
        $list = Listbarang::findOrFail($id);
        return view("list.edit", compact('list'));
    }
    
    public function update(Listbarang $list)
    {
        $list->update($this->validateRequest());
        $this->storeImage($list);
        return redirect()->back()->with(['success' => 'Data Barang Berhasil Diperbarui']);
    }

    public function show($id)
    {
        $list = Listbarang::findOrFail($id);
        return view("list.show", compact('list'));
    }
    
    public function destroy(Listbarang $list)
    {
        $list->delete();

        if(\File::exists(public_path('storage/'. $list->images))){
            \File::delete(public_path('storage/'. $list->images));
        }

        return redirect()->back()->with(['success' => 'Data berhasil di hapus']);
    }

}
