@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row d-flex justify-content-center">
        <div class="col-md-6 ">
            <div class="card border-0 shadow">
                <div class="card-body">
                    <form action="{{route('pesanan.save')}}" enctype="multipart/form-data" method="POST">
                        @csrf
                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success')}}
                            </div>
                        @endif
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jumlah</label>
                                    <input type="number" name="jumlah" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Tanggal Pesan</label>
                                    <input type="date" name="tanggal_pesan" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Pemesan</label>
                                    <input type="text" name="pemesan" class="form-control" id="" >
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Alamat Pemesan</label>
                                    <input type="text" name="alamat_pemesan" class="form-control" id="" >
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <button type="submit" class="btn btn-success">Pesan</button>
                            <a href="{{route('list.index')}}" class="btn btn-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>  
@endsection