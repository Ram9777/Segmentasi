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
                <form action="{{ route('transformasi.update', $item->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <label for="kode_wilayah">Kode Wilayah</label>
                    <input type="text" class="form-control" name="kode_wilayah"
                    value="{{ $item->kode_wilayah }}">
                </div>
                <div class="form-group">
                    <label for="PR">A</label>
                    <input type="text" class="form-control" name="A" 
                    value="{{ $item->A }}">
                </div>
                <div class="form-group">
                    <label for="B">B</label>
                    <input type="text" class="form-control" name="B" 
                    value="{{ $item->B }}">
                </div>
                {{-- <div class="form-group">
                    <label for="jenis_keluhan">Jenis Pengaduan</label>
                    <select name="jenis_keluhan" id="jenis_keluhan" required class="form-control">
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
                        <label for="C">C</label>
                        <input type="text" class="form-control" name="C" 
                        value="{{ $item->C }}">
                    </div>
                    <div class="form-group">
                        <label for="D">D</label>
                        <input type="text" class="form-control" name="D" 
                        value="{{ $item->D }}">
                    </div>
                    <div class="form-group">
                        <label for="E">E</label>
                        <input type="text" class="form-control" name="E" 
                        value="{{$item->E }}">
                    </div>
                    <div class="form-group">
                        <label for="F">F</label>
                        <input type="text" class="form-control" name="F" 
                        value="{{ $item->F }}">
                    </div>
                    <div class="form-group">
                        <label for="G">G</label>
                        <input type="text" class="form-control" name="G"
                        value="{{ $item->G }}">
                    </div>
                    <div class="form-group">
                        <label for="H">H</label>
                        <input type="text" class="form-control" name="H"
                        value="{{ $item->H }}">
                    </div>
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