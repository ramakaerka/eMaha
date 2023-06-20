@extends('layouts.main') 
@section('title','mahasiswa')
@section('content')
<div class="card mt-4">
    <div class="class card-header">
        <div class="class card-body">
            <form action="/mahasiswa/simpan" method="POST">
                @csrf
                <div class="form-group w-25">
                  <label>NIM</label>
                  <input type="number" name="nik" class="form-control" placeholder="Masukkan NIM">
                </div>
                <div class="form-group w-50">
                  <label>Nama Mahasiswa</label>
                  <input type="text" name="nama" class="form-control" placeholder="Masukkan Nama">
                </div>
    
        <label>Gender</label>
        <div class="form-check">
            <input type="radio" value="pria" name="gender" class="form-check-input" >
            <label> Pria </label>
        </div>
        <div class="form-check">
            <input type="radio" value="wanita" name="gender" class="form-check-input" >
            <label> Wanita </label>
        </div>

                <div class="form-group w-50">
                    <label>Tingkat Pendidikan</label>
                    <select name="tingkat_pendidikan" class="form-control">
                        <option value="0">-Pilih Tingkat Pendidikan-</option>
                        <option value="Sistem Informasi">SMA</option>
                        <option value="Teknik Informatika">Strata-1</option>
                        <option value="Teologi">Strata-2</option>
                        <option value="Arsitektur">Strata-3</option>
                    </select>                   
                </div>

                <label>Bidang Keahlian</label>
                  <div class="form-check">
                    <input type="checkbox" name="bidang_keahlian[]" value="Design" class="form-check-input">
                  <label>Design</label>
                  </div>
                <div class="form-check">
                  <input type="checkbox" name="bidang_keahlian[]" value="Writer" class="form-check-input">
                  <label>Writer</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" name="bidang_keahlian[]" value="Database" class="form-check-input">
                  <label>Database</label>
                </div>

                <div class="form-group w-25">
                  <label>IPS Gasal 2021</label>
                  <input type="varchar" name="gasal_21" class="form-control">
                  <label>IPS Genap 2021</label>
                  <input type="varchar" name="genap_21" class="form-control">
                  <label>IPS Gasal 2022</label>
                  <input type="varchar" name="gasal_22" class="form-control">
                </div>

                <button type="submit" class="btn btn-primary mt-3">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
