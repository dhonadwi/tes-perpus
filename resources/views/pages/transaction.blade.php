@extends('layouts.app')

@section('content')
<div class="container">
    <h3>Transaksi</h3>
    <form>
      <div class="form-group">
        <label for="namaPenyewa">Nama Penyewa</label>
        <input type="text" class="form-control" autofocus>
      </div>
      <div class="form-group">
        <label for="noHp">No HP</label>
        <input type="number" class="form-control">
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3"></textarea>
      </div>
      <div class="form-group">
        <label for="alamat">Data Buku</label>
        @for ( $i=1 ;  $i <= 5 ; $i++)
        <select class="custom-select mb-2" name="data_buku" id="data_buku_{{ $i }}" onchange="total({{ $books }})">
            <option value="">Pilih Buku ....</option>
            @foreach ($books as $book)
            <option value="{{ $book['id_buku'] }}">{{ $book['judul_buku'] }}</option>
            @endforeach
        </select>
        @endfor
      </div>
      <p>Total Harga Sewa : Rp. <span id='harga'></span></p>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection

@push('addon-script')
    <script>
      const harga = document.querySelector('#harga');
      harga.innerHTML = 2000;
      function total(harga) {
        console.log(harga)
      }
    </script>
@endpush