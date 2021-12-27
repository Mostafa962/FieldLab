@extends('Admin::index')
@section('admins-menu-open', 'menu-open')
@section('admins-active', 'active')
@section('admins-view-active', 'active')
@section('page-title', 'Admins | View')
@section('content')
@include('Admin::_modals.confirm_password')
@include('Admin::_modals.reset_admin_password')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Admin View</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">
            <a href="{{route('admins.home')}}">Home</a>
          </li>
          <li class="breadcrumb-item active">Admin View</li>
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
          <h3 class="card-title">ADMINS</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <table id="admin-records" class="table table-bordered table-hover table-responsive">
            <thead>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Created By</th>
                <th>Created at</th>
                <th>Actions</th>
              </tr>
            </thead>
              <tbody>
              @foreach($records as $record)
                <tr id="tableRecord-{{$record->id}}">
                  <td>{{$loop->index+1}}</td>
                  <td>{{ $record->name }}</td>
                  <td>{{ $record->email }}</td>
                  <td>{{ $record->phone }}</td>
                  <td>{{ $record->createdBy?$record->createdBy->name:"--"}}</td>
                  <td>{{ date('M d, Y', strtotime($record->created_at)) .'-'.date('h:i a', strtotime($record->created_at)) }}</td>
                  <td>
                      <a 
                        href="{{route('admins.admin.edit',$record->id)}}" 
                        title="Edit" 
                        class="btn btn-sm btn-primary">
                        <i class="fa fa-edit" style="color: #fff"></i>
                      </a>
                      <a 
                        class="btn btn-sm btn-primary"
                        title="Reset Password"
                        data-toggle="modal" 
                        data-target="#reset-admin-password-modal"
                        onclick="injectModalData('{{$record->id}}', '{{route('admins.admin.reset.password')}}', 'reset-admin-password-form', 'POST')"
                        >
                        <i class="fa fa-key" style="color: #fff"></i>
                      </a>
                      @if($record->id !==1)
                        <a 
                          class="btn btn-sm btn-danger" 
                          title="Remove" 
                          data-toggle="modal" 
                          data-target="#confirm-password-modal"
                          onclick="injectModalData('{{$record->id}}', '{{route('admins.admin.trash')}}', 'confirm-password-form', 'POST')"
                        >
                          <i class="fa fa-trash" style="color: #fff"></i>
                        </a> 
                      @endif
                  </td>
                </tr>
              @endforeach
              </tbody>
              <tfoot>
              <tr>
                <th>#</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
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
    $('#admin-records').DataTable({
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
