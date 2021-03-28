@extends('layouts.app')

@section('title')
    Home
@endsection

@section('content')
        <!-- konten -->

        @guest
<main>
    <div class="konten mt-5 ml-5 mr-5">
        <form action="#">
            <div class="form-group">
                <label for="inputNama"><b>Nama</b> </label>
                <input type="text" class="form-control mb-2 mr-sm-2" 
                id="inputNama" value="">
            </div>
            <div class="form-group">
                <label for="inputIDPelanggan"><b>ID Pelanggan</b> </label>
                <input type="text" class="form-control mb-2 mr-sm-2" 
                id="inputIDPelanggan">
            </div>
            <div class="form-group">
                <label for="inputGolonganPelanggan"><b>Golongan Pelanggan</b> </label>
                <input type="text" class="form-control mb-2 mr-sm-2" 
                id="inputGolonganPelanggan">
            </div>
            <div class="form-group">
            <label for="inputJenispengaduan"><b>Jenis Pengaduan</b> </label>
            <select name="inputJenispengaduan" id="inputJeniskeluhan" class="custom-select mb-2 mr-sm-2">
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
                <label for="inputKeterangan"><b>Keterangan</b> </label>
                <input type="text" class="form-control mb-2 mr-sm-2" 
                id="inputKeterangan" 
                placeholder="Keterangan">
            </div>
            <div class="form-group">
                <label for="Tanggalpengaduan"><b>Tanggal Pengaduan</b> </label>
                <input type="text" class="form-control mb-2 mr-sm-2" 
                id="Tanggalpengaduan" >
                </div>
            <button type="submit" class="btn btn-primary btn-block">
                Kirim
            </button>
        </form>
        </div>
</main>
@endguest

@auth
<main>
    <div class="konten mt-5 ml-5 mr-5">
        <form action="{{ route('home.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="id">ID Pelanggan</label>
                <input type="text" class="form-control" name="id" placeholder="Alamat"
                value="{{ Auth::user()->id }}">
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" name="nama" placeholder="Nama"
                value="{{ Auth::user()->name }}">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" name="alamat" placeholder="Alamat"
                value="{{ Auth::user()->alamat }}">
            </div>
            <div class="form-group">
                <label for="golongan">Golongan</label>
                <input type="text" class="form-control" name="golongan" placeholder="Golongan"
                value="{{ Auth::user()->golongan }}">
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
                Kirim
            </button>
        </form>
        </div>
</main>
@endauth
@endsection