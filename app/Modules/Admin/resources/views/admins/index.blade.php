@extends('Admin::index')
@section('admins-menu-open', 'menu-open')
@section('admins-active', 'active')
@section('admins-view-active', 'active')
@section('page-title', 'Admins | View')
@section('content')
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
          <table id="example2" class="table table-bordered table-hover">
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
                <tr>
                  <td>{{$loop->index+1}}</td>
                  <td>{{ $record->name }}</td>
                  <td>{{ $record->email }}</td>
                  <td>{{ $record->phone }}</td>
                  <td>{{ $record->createdBy?$record->createdBy->name:"--"}}</td>
                  <td>{{ $record->created_at }}</td>
                  <td>
                      <a 
                        href="{{route('admins.admin.edit',$record->id)}}" 
                        title="Edit" 
                        class="btn btn-sm btn-primary">
                        <i class="fa fa-edit" style="color: #fff"></i>
                      </a>
                      <a 
                        class="btn btn-sm btn-danger" 
                        title="Delete" 
                        data-toggle="modal"
                        data-target="#deleteResource"
                      >
                        <i class="fa fa-trash" style="color: #fff"></i>
                      </a> 
                      <button 
                        data-toggle="modal" 
                        data-target="#resetPassword" 
                        title="Reset Password"
                        class="btn btn-sm btn-primary"
                        onclick="#">
                        <i class="fa fa-key" style="color: #fff"></i>
                      </button>
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
    $('#example2').DataTable({
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
