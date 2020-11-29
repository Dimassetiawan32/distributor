@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-o shadow">
                <div class="px-3 py-3">
                    <h4 class="font-weight-bold">Laporan</h4>
                </div>
                <div class="card-body">
                    <table class="table table-striped">
                        <thead class="thead-dark">
                            <tr>
                                <th>Kode Barang</th>
                                <th>Nama Barang</th>
                                <th>Jumlah</th>
                                <th>Pemesan</th>
                                <th>Tanggal Pesan</th>
                                <th>Status</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tbody>
                            
                            <tr>
                                <td>coba001</td>
                                <td>plastik</td>
                                <td>20</td>
                                <td>diimss</td>
                                <td>20/20/20</td>
                                <td>ditolak</td>
                                <td>
                                    <form action="" method="post">
                                        <button href="" class="btn btn-outline-danger btn-sm">Hapus</button>
                                    </form>                      
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
