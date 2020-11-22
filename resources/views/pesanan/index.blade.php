@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
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
                            
                            <tr>
                                <td>ds</td>
                                <td>sa</td>
                                <td>s</td>
                                <td>p</td>
                                <td>
                                    <form action="" method="post">
                                        <a href="" class="btn btn-outline-success btn-sm">Show</a>
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
