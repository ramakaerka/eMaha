@extends('layouts.main') 
@section('title','mahasiswa')
@section('content')
<div class="card mt-4">
    <div class="class card-header">
        <div class="class card-body">
            @php 
                $bidang_minat = explode(',', $mhs->bidang_minat);
            @endphp 
            <form action="/mahasiswa/update/{{$mhs->nik}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group w-25">
                  <label>NIM</label>
                  <input type="number" name="nik" class="form-control" value="{{$mhs->nik}}">
                </div>
                <div class="form-group w-50">
                  <label>Nama Mahasiswa</label>
                  <input type="text" name="nama" class="form-control" value="{{$mhs->nama}}">
                </div>
    
        <label>Gender</label>
        <div class="form-check">
            <input type="radio" value="pria" name="gender" class="form-check-input" {{ ( $mhs->gender =='pria') ?'checked':''}}>
            <label> Pria </label>
        </div>
        <div class="form-check">
            <input type="radio" value="wanita" name="gender" class="form-check-input"  {{ ( $mhs->gender =='wanita') ?'checked':''}} >
            <label> Wanita </label>
        </div>

                <div class="form-group w-50">
                    <label>Tingkat Pendidikan</label>
                    <select name="tingkat_pendidikan" class="form-control">
                        <option value="0">-Pilih Tingkat Pendidikan-</option>
                        <option value="SMA"  {{ ( $mhs->tingkat_pendidikan =='SMA') ?'Selected':''}} >SMA</option>
                        <option value="Strata-1"  {{ ( $mhs->tingkat_pendidikan =='Strata-1') ?'Selected':''}}>Strata-1</option>
                        <option value="Strata-2" {{ ( $mhs->tingkat_pendidikan =='Strata-2') ?'Selected':''}}>Strata-2</option>
                        <option value="Strata-3" {{ ( $mhs->tingkat_pendidikan =='Strata-3') ?'Selected':''}}>Strata-3</option>
                    </select>                   
                </div>

                <label>Bidang minat</label>
                  <div class="form-check">
                    <input type="checkbox" name="bidang_keahlian[]" value="Design" class="form-check-input" {{in_array('Design', $bidang_minat) ? 'checked':'' }}>
                  <label>Design</label>
                  </div>
                <div class="form-check">
                  <input type="checkbox" name="bidang_keahlian[]" value="Writer" class="form-check-input" {{in_array('Writer', $bidang_minat) ? 'checked':'' }}>
                  <label>Writer</label>
                </div>
                <div class="form-check">
                  <input type="checkbox" name="bidang_keahlian[]" value="Database" class="form-check-input"{{in_array('Database', $bidang_minat) ? 'checked':'' }}>
                  <label>Database</label>
                </div>

                <div class="form-group w-25">
                  <label>IPS Gasal 2021</label>
                  <input type="varchar" name="gasal_21" class="form-control" value="{{$mhs->gasal_21}}">
                  <label>IPS Genap 2021</label>
                  <input type="varchar" name="genap_21" class="form-control" value="{{$mhs->genap_21}}">
                  <label>IPS Gasal 2022</label>
                  <input type="varchar" name="gasal_22" class="form-control" value="{{$mhs->gasal_22}}">
                </div>
                
                <button type="submit" class="btn btn-primary mt-3">Submit</button>
              </form>
        </div>
    </div>
</div>
@endsection
