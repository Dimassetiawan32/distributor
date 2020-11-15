@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 ">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{route('list.update', $list->id)}}" enctype="multipart/form-data" method="post">
                        @csrf
                        @method('PATCH')
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kode Barang</label>
                                    <input type="text" name="kode_barang" class="form-control" value="{{$list->kode_barang}}" id="">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Barang</label>
                                    <input type="text" name="nama" class="form-control" value="{{$list->nama}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Harga</label>
                                    <input type="text" name="harga" class="form-control" value="{{$list->harga}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Stok</label>
                                    <input type="text" name="stok" class="form-control" value="{{$list->stok}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group"> 
                                    <label for="">Tanggal</label>
                                    <input type="date" name="tanggal" class="form-control" value="{{$list->tanggal}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <input type="file" name="images" class="form-control" value="{{$list->images}}" id="" >
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Keterangan</label>
                                    <textarea name="keterangan" id="" class="form-control">{{$list->keterangan}}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-outline-info">Save</button>
                            <a href="{{route('list.index')}}" class="btn btn-outline-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection  