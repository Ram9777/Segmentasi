@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Data</h1>
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
                <form action="{{ route('complaint.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" placeholder="Nama"
                    value="{{ old('nama') }}">
                </div>
                <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat"
                    value="{{ old('alamat') }}">
                </div>
                <div class="form-group">
                    <label for="golongan">Golongan</label>
                    <input type="text" class="form-control" name="golongan" placeholder="Golongan"
                    value="{{ old('golongan') }}">
                </div>
                <div class="form-group">
                    <label for="id_jeniskeluhan">Jenis Pengaduan</label>
                    <select name="id_jeniskeluhan" id="id_jeniskeluhan" required class="form-control">
                        <option value="A">Pipa Distribusi</option>
                        <option value="B">Pipa Dinas & Asesoris</option>
                        <option value="C">Meter Air</option>
                        <option value="D">Kontinuitas Pengaliran</option>
                        <option value="E">Kualitas Air</option>
                        <option value="F">Pipa Bocor</option>
                        <option value="G">Kesalahan Rekening</option>
                        <option value="H">Lain - Lain</option>
                    </select>
                    </div>
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <textarea name="keterangan" rows="10" class="d-block w-100 form-control">
                        {{ old('keterangan') }}
                    </textarea>
                </div>
                <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" placeholder="Tanggal"
                    value="{{ old('tanggal') }}">
                </div>
                <button type="submit" class="btn btn-primary btn-block">
                    Tambah
                </button>
                </form>
            </div>
        </div>



    <!-- Content Row -->

   

    <!-- Content Row -->
    

</div>
<!-- /.container-fluid -->
@endsection