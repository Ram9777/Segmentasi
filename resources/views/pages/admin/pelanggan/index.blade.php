@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Kelola User</h1>
       <a href="{{ route('pelanggan.create') }}" class="btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i>Tambah User
    </a>
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsivee">
                <table class="table table-bordered table-striped" width="100%" cellspasing="0">
                    <thead>
                        <tr>
                            {{-- <th>ID User</th> --}}
                            <th class="bg-info">Nama</th>
                            <th class="bg-info">Alamat</th>
                            <th class="bg-info">Golongan</th>
                            <th class="bg-info">Email</th>
                            {{-- <th>Roles</th> --}}
                            {{-- <th>Password</th> --}}
                            <th class="bg-info">Action</th>
                        </tr>
                    </thead>
                    <tbody>
                       @forelse ($items as $item)
                       <tr>
                        {{-- <td>{{ $item->id }}</td> --}}
                        <td>{{ $item->nama }}</td>
                        <td>{{ $item->alamat }}</td>
                        <td>{{ $item->golongan }}</td>
                        <td>{{ $item->email }}</td>
                        {{-- <td>{{ $item->roles }}</td> --}}
                        {{-- <td>{{ $item->password }}</td> --}}
                        <td>
                            <a href="{{ route('pelanggan.edit', $item->id) }}" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('pelanggan.destroy', $item->id) }}" method="post"
                            class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                        </td>
                    </tr>
                       @empty
                           <tr>
                               <td colspan="8" class="text-center">Data Kosong</td>
                           </tr>
                       @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>



    <!-- Content Row -->

   

    <!-- Content Row -->
    

</div>
<!-- /.container-fluid -->
@endsection