@extends('Admin::index')
@section('products-menu-open', 'menu-open')
@section('products-active', 'active')
@section('page-title', 'Products | Edit')
@section('content')
@push('style')
<link rel="stylesheet" href="{{asset('admin/plugins/select2/css/select2.min.css')}}">
<link rel="stylesheet" href="{{asset('admin/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css')}}">
@endpush
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Product Edit</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item">
            <a href="{{route('admins.home')}}">Home</a>
          </li>
          <li class="breadcrumb-item active">Product Edit</li>
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
          <h3 class="card-title">Products</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
        <div class="card-body">
          <form class="" method="post" action="{{route('admins.product.update', $record->id)}}" enctype="multipart/form-data">
            @csrf
            @method('put')
            <div class="form-group">
              <label for="inputCategory">Category 
                <span style="color:red">*
                </span>
              </label>
              <select 
                name="category"
                required
                id="inputCategory"
                class="form-control select2bs4"
              >
                @foreach($categories as $category)
                  <option 
                    value="{{$category->id}}"
                    @if($category->id == old('category') or $category->id==$record->category_id) selected @endif
                  >
                      {{$category->name}}
                  </option>
                @endforeach
              </select>
              @error('category')
                <span id="inputCategory-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="inputName">Name 
                <span style="color:red">*
                </span>
              </label>
              <input 
                    type="text" 
                    name="name" 
                    value="{{old('name')?old('name'):$record->name}}"
                    required
                    id="inputName" 
                    class="form-control"
                    placeholder="Name.."
                    >
              @error('name')
              <span id="inputName-error" class="error invalid-feedback" style="display:block">{{ $message }}
              </span>
              @enderror
            </div>
            <div class="form-group">
              <label for="inputImage">Image 
              </label>
              <input 
                    type="file" 
                    name="image" 
                    id="inputImage" 
                    class="form-control"
                    >
              @if($record->image)
                <img src="{{asset('storage/'. $record->image)}}" width="100" alt="image not found">
              @endif
              @error('image')
                <span id="inputImage-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="inputPdf">PDF 
              </label>
              <input 
                    type="file" 
                    name="pdf" 
                    id="inputPdf" 
                    class="form-control"
                    >
              @if($record->pdf)
                <a target="_blank" title="View the file" href="{{asset('storage/'. $record->pdf)}}"><i class="fa fa-file"></i></a>
              @endif
              @error('pdf')
              <span id="inputPdf-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="inputQuotation">Quotation 
              </label>
              <textarea 
                name="quotation"
                required
                id="inputQuotation"
                class="form-control"
              >{{old('quotation')?old('quotation'):$record->quotation}}</textarea>
              @error('quotation')
                <span id="inputquotation-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
              @enderror
            </div>
            <div class="form-group">
              <label for="inputDescription">Description 
                <span style="color:red">*</span>
              </label>
              <textarea 
                name="description"
                required
                id="inputDescription"
                class="form-control"
              >{{old('description')?old('description'):$record->description}}</textarea>
              @error('description')
                <span id="inputDescription-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
              @enderror
            </div>
            <div class="row">
              <div class="col-12">
                <input type="submit" value="Save" class="btn btn-success float-right">
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<br>
@push('script')
<script src="{{asset('admin/plugins/select2/js/select2.full.min.js')}}"></script>
<script>
  $('#inputDescription').summernote();
  $('.select2bs4').select2({
      theme: 'bootstrap4'
  })
</script>
@endpush
@endsection
