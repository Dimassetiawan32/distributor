@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-o shadow">
                <div class="px-3 py-3">
                    <h4 class="font-weight-bold">Pesanan Barang</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Jumlah</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barangmasuks as $list)
                            @foreach($pesanans as $pesanan)
                            <tr>
                                <td>{{$list->kode_barang}}</td>
                                <td>{{$list->nama}}</td>
                                <td>Rp. {{$list->harga}}</td>
                                <td>{{$pesanan->jumlah}}</td>
                                <td>
                                    <form action="{{route('pesanan.delete', $pesanan->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="" class="btn btn-outline-success btn-sm">Terima</a>
                                        <a href="{{route('pesanan.editform', $pesanan->id)}}" class="btn btn-outline-primary btn-sm">Edit</a>
                                        <button href="" class="btn btn-outline-danger btn-sm">Hapus</button>
                                    </form>                      
                                </td>
                            </tr>
                            @endforeach
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
