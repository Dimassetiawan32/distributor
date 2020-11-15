@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 ">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <img src="{{asset('storage/'.$list->images)}}" class="card-img-top" alt="">
                    <div class="card-title">
                        <h4 class="font-weight-bold py-3">{{$list->kode_barang}} - {{$list->nama}} </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection 
                    <!-- <form action="{{route('list.save')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Kode Barang</label>
                                    <input type="text" name="kode_barang" class="form-control" value="{{$list->kode_barang}}" id="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama</label>
                                    <input type="text" name="nama" class="form-control" value="{{$list->nama}}" id="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Harga</label>
                                    <input type="text" name="harga" class="form-control" value="{{$list->harga}}" id="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Stok</label>
                                    <input type="text" name="stok" class="form-control" value="{{$list->stok}}" id="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanggal</label>
                                    <input type="text" name="tanggal" class="form-control" value="{{$list->tanggal}}" id="" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Image</label>
                                    <div class="">
                                        <img src="{{asset('storage/'.$list->images)}}" alt="" weight="30px" height="30px">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Keterangan</label>
                                    <textarea name="keterangan" id="" class="form-control" value="{{$list->keterangan}}" readonly></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-outline-info">Save</button>
                            <a href="{{route('list.index')}}" class="btn btn-outline-secondary">Back</a>
                        </div>
                    </form> -->