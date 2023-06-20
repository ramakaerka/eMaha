@extends('layouts.main') 
@section('title','Profile Mahasiswa')
@section('content')
<div class="card mt-4">

    <div class="class card-header">
      <div class="container">
        <div class="row mt-4">
    
          <div class="col-md-6">
            <div class="card">
              <div class="card-header"><strong>Informasi Akademik</strong>
                <div class="card-body">
                  <img width="150" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSAyrdZdnZGubE_4pR3gksrsfRTNPs2jz4Rv9fq3pJ3WLH2dtI-F0uKlmJI5ennbuJpOZY&usqp=CAU" class="rounded float-start" alt="...">
                  {{-- Informasi Akademik --}}

                  <div class="row">
                    <div class="col">
                      Status Mahasiswa
                    </div>
                    <div class="col">
                      <strong>AR</strong>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      Status
                    </div>
                    <div class="col">
                      <strong>A</strong>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      Ip Kumulatif
                    </div>
                    <div class="col">
                      <strong>3.32</strong>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      Total SKS
                    </div>
                    <div class="col">
                      <strong>63</strong>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      Total Angka Kualitas
                    </div>
                    <div class="col">
                      <strong>210,9</strong>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      Total SKS KRS
                    </div>
                    <div class="col">
                      <strong>21</strong>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col">
                      Total Harga SKS
                    </div>
                    <div class="col">
                      <strong>24</strong>
                    </div>
                  </div>

                  {{-- /Informasi Akademik --}}
                </div>
              </div>
            </div>
          </div>
  
    
          
              
          
          <div class="col">
            <div class="card">
              <div class="card-header"><strong>Perkembangan IP & SKS Semester</strong>
                <div class="card-body">
                  <div class="row">
                    <div class="col">
                      Gasal 2021/2022
                    </div>
                    <div class="col">
                      <strong>
                        {{ $mhs->gasal_21 }}
                      </strong>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col">
                      Genap 2021/2022
                    </div>
                    <div class="col">
                      <strong>{{ $mhs->genap_21 }}</strong>
                    </div>
                  </div>

                  <div class="row">

                    <div class="col">
                      Gasal 2022/2023
                    </div>
                    <div class="col">
                      <strong>{{ $mhs->gasal_22 }}</strong>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

        
              
        </div>
    </div>
</div>
@endsection
