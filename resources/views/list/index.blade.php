@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{route('list.create')}}" class="btn btn-outline-primary">Tambah Barang</a>
            </div>
            <div class="card border-o shadow">
                <div class="px-3 py-3">
                    <h4 class="font-weight-bold">List Barang</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($barangmasuks as $list)
                            <tr>
                                <td>{{$list->kode_barang}}</td>
                                <td>{{$list->nama}}</td>
                                <td>{{$list->harga}}</td>
                                <td>{{$list->stok}}</td>
                                <td>
                                <a href="" class="btn btn-outline-success btn-sm">Show</a>                        
                                <a href="" class="btn btn-outline-primary btn-sm">Edit</a>
                                <button class="btn btn-outline-danger btn-sm">Delete</button>                        
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection