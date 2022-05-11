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
        <select class="custom-select mb-2" name="data_buku" id="data_buku">
            <option value="">Pilih Buku ....</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <select class="custom-select  mb-2" name="data_buku" id="data_buku">
            <option value="">Pilih Buku ....</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <select class="custom-select  mb-2" name="data_buku" id="data_buku">
            <option value="">Pilih Buku ....</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <select class="custom-select  mb-2" name="data_buku" id="data_buku">
            <option value="">Pilih Buku ....</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>
        <select class="custom-select  mb-2" name="data_buku" id="data_buku">
            <option value="">Pilih Buku ....</option>
            <option value="2">2</option>
            <option value="3">3</option>
        </select>

        <p>Total Harga Sewa : Rp. 15.000</p>
      </div>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection