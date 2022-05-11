@extends('layouts.app')

@push('addon-style')
    <link href="{{ url('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
    <div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck">
                            </div>
                        </th>
                        <th>ID Buku</th>
                        <th>Judul Buku</th>
                        <th>Kategori</th>
                        <th>Harga Sewa</th>
                    </tr>
                </thead>
               <tbody>
                   <tr>
                        <td> <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" value="" id="B001">
                            </div></td>
                        <td>B001</td>
                        <td>Wiro Sableng</td>
                        <td>Komik</td>
                        <td>$320,800</td>
                    </tr>
               </tbody>
            </table>
        </div>
    </div>
</div>   
@endsection

@push('addon-script')
    <script src="{{ url('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('js/demo/datatables-demo.js') }}"></script>
@endpush