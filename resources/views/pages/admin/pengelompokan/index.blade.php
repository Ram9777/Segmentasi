@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

    {{ DB::table('centroid_temp')->truncate() }}
    {{ DB::table('hasil_iterasi')->truncate() }}
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Pengelompokan Data</h1>
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

    <div class="control-group">
        <form action="{{ route('pengelompokan.create') }}">
            {{-- @method('PUT') --}}
            @csrf
        {{-- <label class="control-label">Jumlah Klaster (Lebih dari 1) :</label>
        <div class="controls">
          <input type="text" name="jumlah" id="inputJumlah" class="span11" required="required" placeholder="Jumlah Klaster">
        </div>
    </div>
    <div class="form-actions"> --}}
        <button type="submit" class="btn btn-success">Kelompokkan</button>
      </div>

        </div>



<!-- /.container-fluid -->
@endsection