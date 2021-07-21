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
{{-- <script>
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".hdtuto").remove();
      });
    });
</script> --}}
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
            <h6 class="m-0 font-weight-bold text-dark">Data Image</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th width="2%">NO</th>
                            <th>CATEGORY</th>
                            <th width="10%">IMAGE</th>
                            <th width="10%" class="text-center">OPSI</th>
                        </tr>
                    </thead>                  
                    <tbody>
                    {{-- // Blade --}}

                    {{-- // Html --}}
                        @foreach ($image as $row)
                        <tr>
                            <td class="text-center">{{$no++}}</td>
                            <td>{{$row->products->product_name}}</td>
                            <td><img src="{{asset('images/detail/'. $row->image)}}" width="150px" alt=""></td>
                            <td class="text-center">
                                <form id="DeleteForm" method="POST" action="{{route('image.destroy',$row->id)}}">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route('image.edit',$row->id)}}" class="btn btn-sm btn-warning"><i class="fas fa-edit"></i></a>
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
          <h5 class="modal-title" id="exampleModalLongTitle">Add Image</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
            <h3 class="mt-3 text-center">Form</h3>
            <form method="POST" action="{{route('image.store')}}" enctype="multipart/form-data">
                @csrf
                <div class="container">
                    <div class="form-group row">
                        <label for="kategory" class="col-sm-2 col-form-label">Product</label>
                        <div class="col-sm-12">
                          <select id="kategory" class="form-control col-form-label" name="product">
                            @foreach ($product as $products)
                            <option value="{{$products->id}}">{{$products->product_name}}</option>
                            @endforeach
                          </select>
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="exampleFormControlFile1">Image</label>
                        <input type="file" name="filenames" class="form-control-file" id="exampleFormControlFile1">
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