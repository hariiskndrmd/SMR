@extends('admin.layouts.app')

@section('css')
<!-- Custom styles for this page -->
<link href="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection

@section('scripts')
<!-- Page level plugins -->
<script src="{{ asset('admin/vendor/datatables/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('admin/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
<!-- Page level custom scripts -->
<script src="{{ asset('admin/js/demo/datatables-demo.js') }}"></script>
<script>
    document.getElementById('delete').onclick = function(e){

    e.preventDefault()

    Swal.fire({
            title: 'Yakin Mau Hapus Data?',
            text: "Data Akan Terhapus Secara Permanen!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
        }).then((result) => {
            if (result.isConfirmed) {   
            document.getElementById("DeleteForm").submit();
            }
        })
    }
</script>
{{-- <script>
    $('#formSave').submit(function(e) {
           e.preventDefault();
           var request = new FormData(this);

           $('#formSave').removeClass('hide')

           $.ajax({
               url: "{{ route('spp.store') }}",
               method: "POST",
               data: request,
               contentType: false,
               cache: false,
               processData: false,
               success: function(data) {
                   if (data == "sukses") {
                       $('#closeModalTambah').click();
                       $('#formSave')[0].reset();
                       swal({
                           type: 'success',
                           title: 'Berhasil!',
                           text: 'Data Telah Tersimpan!'
                       });
                       loadDataTable();
                   }
               }
           });
       });
</script> --}}
@endsection

@section('content')
<div class="container-fluid">
    @if(\Session::has('success'))
    <div>{!!Session::get('success')!!}</div>
    @endif
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-end mb-4">
        <button class="btn btn-sm btn-dark shadow-sm mr-2" data-toggle="modal" data-target="#market"><i class="fas fa-plus fa-sm text-white-50"></i> Add</button>
   
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">Data Market</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="2%">NO</th>
                            <th>NAME</th>
                            <th width="10%">FLAG</th>
                            <th width="10%" class="text-center">OPSI</th>
                        </tr>
                    </thead>                  
                    <tbody>
                    {{-- // Blade --}}

                    {{-- // Html --}}
                        @foreach ($market as $row)
                        <tr>
                            <td class="text-center">{{$no++}}</td>
                            <td>{{$row->name}}</td>
                            <td><img src="{{asset('images/market/'. $row->flag)}}" alt=""></td>
                            <td class="text-center">
                                <form id="DeleteForm" method="POST" action="{{route('market.destroy',$row->id)}}">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('market.edit',$row->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
                                    <button type="submit" id="delete" class="btn btn-sm btn-danger"><i class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>

{{-- modal --}}
<div class="modal hide fade in" id="market" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Add Market</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            <h3 class="mt-3 text-center">Form</h3>
            <form method="POST" action="{{route('market.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" required="required" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <label for="image">Flag</label>
                        <input type="file" class="form-control-file" id="image" name="image">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-primary">Add</button>
                </div>
            </form>
            
            
      </div>
    </div>
  </div>


@endsection