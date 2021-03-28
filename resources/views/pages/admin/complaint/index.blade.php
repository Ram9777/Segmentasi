@extends('layouts.admin')

@section('content')
     <!-- Begin Page Content -->
 <div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Data Keluhan</h1>
       {{-- <a href="{{ route('complaint.create') }}" class="btn btn-sm btn-primary shadow-sm">
    <i class="fas fa-plus fa-sm text-white-50"></i>Input Keluhan
    </a> --}}
    </div>

    <div class="row">
        <div class="card-body">
            <div class="table-responsivee">
                <table class="table table-bordered table-striped" width="100%" cellspasing="0">
                    <thead>
                        <tr>
                            <th class="bg-info"><font size='2'>No</font></th>
                            <th class="bg-info"><font size='2'>Nama</font></th>
                            <th class="bg-info"><font size='2'>Alamat</font></th>
                            <th class="bg-info"><font size='2'>Golongan</font></th>
                            <th class="bg-info"><font size='2'>Jenis Keluhan</font></th>
                            <th class="bg-info"><font size='2'>Keterangan</font></th>
                            <th class="bg-info"><font size='2'>Tanggal</font></th>
                            {{-- <th class="bg-info"><font size='2'>Action</font></th> --}}
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1 ?>
                       @forelse ($items as $item)
                       <tr>
                        <td>{{ $no }}</td>
                        <td><font size='1'>{{ $item->nama }}</font></td>
                        <td><font size='1'>{{ $item->alamat }}</font></td>
                        <td><font size='1'>{{ $item->golongan }}</font></td>
                        <td><font size='1'>{{ $item->id_jeniskeluhan }}</font></td>
                        <td><font size='1'>{{ $item->keterangan }}</font></td>
                        <td><font size='1'>{{ $item->tanggal }}</font></td>
                        {{-- <td>
                            <a href="{{ route('complaint.edit', $item->id) }}" class="btn btn-info">
                            <i class="fa fa-pencil-alt"></i>
                        </a>
                        <form action="{{ route('complaint.destroy', $item->id) }}" method="post"
                            class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                        </td> --}}
                        <?php $no++ ?>
                    </tr>
                       @empty
                           <tr>
                               <td colspan="8" class="text-center">Data Kosong</td>
                           </tr>
                       @endforelse
                    </tbody>
                </table>
                {{ $items->links() }}
            </div>
        </div>
    </div>

   
    {{-- i8  --}}
   
</body>
   
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap4.min.js"></script>
<script type="text/javascript">
  $(function () {
    
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{ route('complaint.index') }}",
        columns: [
            {data: 'DT_RowIndex', name: 'DT_RowIndex'},
            {data: 'nama', name: 'nama'},
            {data: 'alamat', name: 'alamat'},
            {data: 'golongan', name: 'golongan'},
            {data: 'id_jeniskeluhan', name: 'id_jeniskeluhan'},
            {data: 'keterangan', name: 'keterangan'},
            {data: 'tanggal', name: 'tanggal'},
            {data: 'action', name: 'action', orderable: true, searchable: true},
        ]
    });
  });
</script> --}}


    <!-- Content Row -->

   

    <!-- Content Row -->
    


<!-- /.container-fluid -->
@endsection