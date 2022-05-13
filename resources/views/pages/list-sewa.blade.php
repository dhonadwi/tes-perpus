@extends('layouts.app')

@push('addon-style')
    <link href="{{ url('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="container">
  <form action="/" method="POST"> 
      @method('DELETE')
      @csrf
      <div class="card shadow mb-4 mt-2">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Penyewa</h6>
          </div>
          <div class="card-body">
              <div class="table-responsive">
                  <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                      <thead>
                          <tr>
                              <th>Nama</th>
                              <th>No Hape</th>
                              <th>Alamat</th>
                              <th>Data Buku</th>
                              <th>Harga Sewa</th>
                          </tr>
                      </thead>
                  <tbody>
                    @foreach ($transactions as $item)
                        <tr>
                            <td>{{ $item['nama'] }}</td>
                            <td>{{ $item['no_hp'] }}</td>
                            <td>{{ $item['alamat'] }}</td>
                            <td>
                                <ul>
                                    @foreach ($item->data_buku as $buku )
                                    <li>{{ $buku }}</li>                                
                                    @endforeach
                                </ul>
                            </td>
                            <td>{{ $item->harga }}</td>
                        </tr>
                    @endforeach
                  </tbody>
                  </table>
              </div>
          </div>
      </div> 
      <a href="/" class="btn btn-success">Edit</a>
  </form>
</div>
@endsection

@push('addon-script')
    <script src="{{ url('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('js/demo/datatables-demo.js') }}"></script>
@endpush