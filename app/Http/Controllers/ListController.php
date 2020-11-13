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
        return view("list.create");
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

}
