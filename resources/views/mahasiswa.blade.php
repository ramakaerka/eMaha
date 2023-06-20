@extends('layouts.main')
@section('title', 'mahasiswa ')
@section('content')
    @if (session('alert'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>{{ session('alert') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="card mt-4">
        <div class="card-header">
            <a href="/mahasiswa/formtambah" class="btn btn-secondary" role="button"><i
                    class="bi bi-cloud-plus-fill"></i>Mahasiswa</a>
            <form action="/mahasiswa/pencarian" method="GET" class="form-inline my-2 my-lg-0 float-right">
                <input name="q" class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-dark my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">id</th>
                        <th scope="col">NIM</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Jurusan</th>
                        <th scope="col">Bidang minat</th>
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($mhs as $idx => $m)
                        <tr>
                            <th scope="row">{{ $mhs->firstItem() + $idx }}</th>
                            <td>{{ $m->nik }}</td>
                            <td>{{ $m->nama }}</td>
                            <td>{{ $m->gender }}</td>
                            <td>{{ $m->tingkat_pendidikan }}</td>
                            <td>{{ $m->bidang_keahlian }}</td>
                           <td> 
                            <a href="/mahasiswa/profilemhs/ {{ $m->nik }}" class="btn btn-primary" role="button"><i class="bi bi-person-lines-fill"></i>
                            </a>

                            <a href="/mahasiswa/formedit/{{ $m->nik }}" class= "btn btn-success" role="button"> <i class="bi bi-pencil-square"></i></a>

                            <a href="/mahasiswa/delete/{{$m->nik}}" class="btn btn-danger"><i class="bi bi-x-square"></i></a>
                           </td>
                
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <span class="float-right">{{ $mhs->links() }}</span>
        </div>
    </div>
@endsection
