@php
    $page_type = 'Admin';
@endphp
@extends('admin.layouts.master')

@push('styles')
    <link rel="stylesheet" href="{{ url('assets/admin/bundles/jquery-selectric/selectric.css') }}">
    <link rel="stylesheet" href="{{ url('assets/admin/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ url('assets/admin/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/admin/css/components.css') }}">
    <style>
      .col-form-label.text-md-right.col-12.col-md-3.col-lg-3 {
        font-size: 15px;
      }
    </style>
@endpush

@section('content')

<div class="main-content">
    <div class="section">
      @include('admin.partials.error')
        <div class="card card-primary">
            <div class="card-header" style="border-bottom-color: #d0d0d0">
                <h4>Update Blog</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.blog.index') }}" class="btn btn-warning">Go Back</a>
                </div>
            </div>
           
            <div class="card-body">

             <form action="{{ route('admin.blog.update', $blog->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
                @method('PUT')
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Thumbnail</label>
                  <div class="col-sm-12 col-md-7">
                    <div id="image-preview" class="image-preview"
                    style="background-image: url({{ asset("/uploads/images/$blog->image") }}); background-size: cover; background-position: center center;">
                      <label for="image-upload" id="image-label">Choose File</label>
                      <input type="file" name="image" id="image-upload" />
                    </div>
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="title" class="form-control" value="{{ $blog->title }}">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric" name="category_id">
                      <option value="">select category</option>
                      @foreach ($categories as $category)
                      <option {{ $blog->category_id == $category->id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Content</label>
                  <div class="col-sm-12 col-md-7">
                    <textarea id="ckeditor" name="body">{{ $blog->body }}</textarea>
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control inputtags" name="tags" value="{{ json_decode($blog->tags) }}">
                  </div>
                </div>
  
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Action</label>
                  
                  <div class="col-sm-12 col-md-3">
                    <div class="control-label">Make it premium </div>
                  <label class="custom-switch mt-2">
                    <input {{ $blog->is_premium == 1 ? 'checked' : '' }} type="checkbox" name="is_premium" class="custom-switch-input">
                    <span class="custom-switch-indicator"></span>
                  </label>
                  </div>

                  @hasanyrole('admin|manager')
                  <div class="col-sm-12 col-md-3">
                    <div class="control-label">Aprove</div>
                  <label class="custom-switch mt-2">
                    <input {{ $blog->status == 1 ? 'checked' : '' }} type="checkbox" name="status" class="custom-switch-input">
                    <span class="custom-switch-indicator"></span>
                  </label>
                  </div>
                  @endhasanyrole

                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                  <div class="col-sm-12 col-md-7">
                    <button class="btn btn-primary">Update Blog</button>
                  </div>
                </div>
             </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ url('assets/admin/bundles/jquery-selectric/jquery.selectric.min.js') }}"></script>
<script src="{{ url('assets/admin/bundles/upload-preview/assets/js/jquery.uploadPreview.min.js') }}"></script>
<script src="{{ url('assets/admin/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
<script src="{{ url('assets/admin/bundles/ckeditor/ckeditor.js') }}"></script>
<!-- Page Specific JS File -->
<script src="{{ url('assets/admin/js/page/create-post.js') }}"></script>
<script src="{{ url('assets/admin/js/page/ckeditor.js') }}"></script>

<script>
    // $(".inputtags").tagsinput();
    $(".inputtags").val();
</script>
@endpush