@extends('layouts.app')

@push('addon-style')
    <link href="{{ url('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="container">
  <form action="{{ route('hapus-penyewa') }}" method="POST"> 
      @method('DELETE')
      @csrf
      <div class="card shadow mb-4 mt-2">
          <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Data Penyewa Aktif</h6>
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
                              <th>Nama</th>
                              <th>No Hape</th>
                              <th>Alamat</th>
                              <th>Data Buku</th>
                              <th>Harga Sewa</th>
                          </tr>
                      </thead>
                  <tbody>
                    @foreach ($transaction as $item)
                        <tr>
                            <td> <div class="form-check form-check-inline">
                                <input class="form-check-input" type="checkbox" value="{{ $item['id'] }}" id="checkItem" name="delete[]">
                                </div></td>
                            <td>
                                <a href="{{ route('list-sewa-detail',$item->id) }}"> {{ $item->nama }}</a>   
                            </td>
                            <td>{{ $item->no_hp }}</td>
                            <td>{{ $item->book->judul_buku }}</td>
                            <td>
                                <ul>
                                    {{-- {{ dd($item['transaction_detail']) }} --}}
                                    {{-- @foreach ($transactions[$index]->transaction_detail as $buku ) --}}
                                    {{-- <li>{{ $buku->book->judul_buku }}</li>                                 --}}
                                    {{-- <li>a</li> --}}
                                    {{-- @endforeach --}}
                                    {{-- <li>{{ $item->transaction_detail }}</li> --}}
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
      <button type="submit" class="btn btn-success">Update</button>
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