@extends('layouts.app')

@push('addon-style')
    <link href="{{ url('vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endpush
@section('content')
<div class="container">
    <form method="POST" action="{{ route('tambah-buku-baru') }}">
    @csrf
    <div class="form-group">
        <label for="idBuku">ID Buku</label>
        <input type="text" class="form-control" name="id_buku" autofocus>
      </div>
    <div class="form-group">
        <label for="judulBuku">Judul Buku</label>
        <input type="text" class="form-control" name="judul_buku">
      </div>
      <div class="form-group">
          <label for="kategori">Kategori</label>
          <select name="kategori" class="form-control">
              <option value="komik">Komik</option>
              <option value="novel">Novel</option>
              <option value="pendidikan">Pendidikan</option>
            </select>
        </div>
        <div class="form-group">
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">Rp. </span>
                </div>
                <input type="number" class="form-control" placeholder="Harga Sewa" name="harga">
                </div>
        </div>
        <button type="submit" class="btn btn-success">Submit</button>
        <a href="/buku" class="btn btn-primary">Kembali</a>
    </form>
</div>
@endsection

@push('addon-script')
    <script src="{{ url('vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('js/demo/datatables-demo.js') }}"></script>
@endpush