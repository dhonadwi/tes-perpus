@extends('layouts.app')

@push('addon-style')
    <link href="{{ url('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="container">
    @if($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>tes</li>
                @endforeach
            </ul>
        </div>
    @endif
    @if (session()->has('message'))
        <div class="alert alert-success">
            <ul>
                <li>{{ session()->get('message') }}</li>
            </ul>
        </div>
    @endif

<form action="{{ route('hapus-buku') }}" method="POST"> 
    @method('DELETE')
    @csrf
    <div class="card shadow mb-4 mt-2">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Buku</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>
                                <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" id="defaultCheck" onchange="cek()">
                                </div>
                            </th>
                            <th>ID Buku</th>
                            <th>Judul Buku</th>
                            <th>Kategori</th>
                            <th>Harga Sewa</th>
                        </tr>
                    </thead>
                <tbody>
                    @foreach ($books as $book)
                        <tr>
                            <td> <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="{{ $book['id'] }}" id="checkItem" name="delete[]">
                                </div></td>
                            <td>{{ $book['id'] }}</td>
                            <td>{{ $book['judul_buku'] }}</td>
                            <td>{{ $book['kategori'] }}</td>
                            <td>{{ $book['harga'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
                </table>
            </div>
        </div>
    </div> 
    <a href="/buku/add" class="btn btn-success">Tambah</a>
    <button type="submit" class="btn btn-danger">Hapus</button>   
</form>
</div>
@endsection

@push('addon-script')
    <script src="{{ url('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('js/demo/datatables-demo.js') }}"></script>
    <script>
        const checkAll = document.querySelector('#defaultCheck');
        const checkItem = document.querySelectorAll('#checkItem');

        function cek()
        {
            if(checkAll.checked){
                checkItem.forEach(item => {
                    item.checked = true;
                });
            }else{
                checkItem.forEach(item => {
                    item.checked = false;
                });
            }
        }

    </script>
@endpush