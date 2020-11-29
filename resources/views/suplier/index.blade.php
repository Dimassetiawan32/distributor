@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="mb-3">
                <a href="{{route('suplier.create')}}" class="btn btn-outline-primary">Tambah Suplier</a>
            </div>
            <div class="card border-o shadow">
                <div class="px-3 py-3">
                    <h4 class="font-weight-bold">Data Suplier</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Kode Suplier</th>
                                <th>Nama Suplier</th>
                                <th>Pemilik</th>
                                <th>Alamat</th>
                                <th>Email</th>
                                <th>NoTelp</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>                          
                            @foreach($supliers as $suplier)
                            <tr>
                                <td>{{$suplier->kode_suplier}}</td>
                                <td>{{$suplier->nama_suplier}}</td>
                                <td>{{$suplier->pemimpin}}</td>
                                <td>{{$suplier->alamat}}</td>
                                <td>{{$suplier->email}}</td>
                                <td>{{$suplier->no_telpon}}</td>
                                <td>
                                    <form action="{{route('suplier.delete', $suplier->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <a href="{{route('suplier.show', $suplier->id)}}" class="btn btn-outline-success btn-sm">Show</a>
                                        <a href="{{route('suplier.editform', $suplier->id)}}" class="btn btn-outline-primary btn-sm">Edit</a>
                                        <button href="" class="btn btn-outline-danger btn-sm">Hapus</button>
                                    </form>                      
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