@extends('Admin::index')
@section('sliders-menu-open', 'menu-open')
@section('sliders-active', 'active')
@section('sliders-view-active', 'active')
@section('page-title', 'Slider | View')
@section('content')
@include('Admin::_modals.confirm_password')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Slider View</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">
            <a href="{{route('admins.home')}}">Home</a>
          </li>
          <li class="breadcrumb-item active">Slider View</li>
        </ol>
      </div>
    </div>
  </div>
  <!-- /.container-fluid -->
</section>
<section class="content">
  <div class="row">
    <div class="col-md-12">
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">SLIDERS</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body table-responsive">
          <table id="sliders-records" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>Image</th>
                <th>Created By</th>
                <th>Created at</th>
                <th>Actions</th>
              </tr>
            </thead>
              <tbody>
              @foreach($records as $record)
                <tr id="tableRecord-{{$record->id}}">
                  <td>{{$loop->index+1}}</td>
                  <td>
                    <img src="{{asset('storage/'. $record->image)}}" width="100" alt="image not found">
                  </td>
                  <td>{{ $record->createdBy?$record->createdBy->name:"--"}}</td>
                  <td>{{ date('M d, Y', strtotime($record->created_at)) .'-'.date('h:i a', strtotime($record->created_at)) }}</td>
                  <td>
                      <a 
                        href="{{route('admins.slider.edit',$record->id)}}" 
                        title="Edit" 
                        class="btn btn-sm btn-primary">
                        <i class="fa fa-edit" style="color: #fff"></i>
                      </a>
                        <a 
                          class="btn btn-sm btn-danger" 
                          title="Remove" 
                          data-toggle="modal" 
                          data-target="#confirm-password-modal"
                          onclick="injectModalData('{{$record->id}}', '{{route('admins.slider.trash')}}', 'confirm-password-form', 'POST')"
                        >
                          <i class="fa fa-trash" style="color: #fff"></i>
                        </a> 
                  </td>
                </tr>
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>#</th>
                <th>Image</th>
                <th>Created By</th>
                <th>Created at</th>
                <th>Actions</th>
              </tr>
              </tfoot>
            </table>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
@push('script')
<script>
  $(function () {
    $('#slider-records').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
@endpush
@endsection
