@extends('layouts.app')

@section('title')
    History
@endsection

@section('content')
<main>
    <div class="konten mt-5 ml-5 mr-5">
        <div class="row">
            <div class="card-body">
                <div class="table-responsive">
                    <table width="100%" cellspacing="0" border="1">
                        <thead>
                            <tr>
                                <th>ID Keluhan</th>
                                <th>Nama</th>
                                <th>Alamat</th>
                                <th>Golongan</th>
                                <th>Jenis Pengaduan</th>
                                <th>Keterangan</th>
                                <th>Tanggal</th>
                            </tr>
                        </thead>
                        <tbody>
                           @forelse ($items as $item)
                           <tr>
                            <td>{{ $item->pelanggan->id }}</td>
                            <td>{{ $item->nama }}</td>
                            <td>{{ $item->alamat }}</td>
                            <td>{{ $item->golongan }}</td>
                            <td>{{ $item->jenis_keluhan }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>{{ $item->tanggal }}</td>
                            
                        </tr> 
                           @empty
                           <tr>
                            <td colspan="7" class="text-center">Data Kosong</td>
                        </tr>
                           @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection