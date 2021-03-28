@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Data {{ $item->title }}</h1>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

        <div class="card shadow">
            <div class="card-body">
                <form action="{{ route('pelanggan.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama"
                    value="{{ $item->nama }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat"
                    value="{{ $item->alamat }}">
                </div>
                <div class="form-group">
                    <label for="golongan">Golongan</label>
                    <input type="text" class="form-control" name="golongan" placeholder="Golongan"
                    value="{{ $item->golongan }}">
                </div>
                {{-- <div class="form-group">
                    <label for="jenis_keluhan">Jenis Pengaduan</label>
                    <select name="jenis_keluhan" id="jenis_keluhan" required class="form-control" value="{{ $item->jenis_keluhan }}">
                        <option value="A (Pipa Distribusi)">Pipa Distribusi</option>
                        <option value="B (Pipa Dinas & Asesori)">Pipa Dinas & Asesoris</option>
                        <option value="C (Meter Air)">Meter Air</option>
                        <option value="D (Kontinuitas Pengaliran)">Kontinuitas Pengaliran</option>
                        <option value="E (Kualitas Air)">Kualitas Air</option>
                        <option value="F (Pipa Bocor)">Pipa Bocor</option>
                        <option value="G (Kesalahan Rekening)">Kesalahan Rekening</option>
                        <option value="H (Lain-lain)">Lain - Lain</option>
                    </select>
                    </div> --}}
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" name="email" placeholder="Email"
                        value="{{ $item->email }}">
                    </div>
                {{-- <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" placeholder="Tanggal"
                    value="{{ $item->tanggal }}">
                </div> --}}
                <button type="submit" class="btn btn-primary btn-block">
                    Edit
                </button>
                </form>
            </div>
        </div>



    <!-- Content Row -->

   

    <!-- Content Row -->
    

</div>
<!-- /.container-fluid -->
@endsection