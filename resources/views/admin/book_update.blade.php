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
                <h4>Create Blog</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.book.index') }}" class="btn btn-warning">Go Back</a>
                </div>
            </div>

            <div class="card-body">

             <form action="{{ route('admin.book.update', $book->id) }}" method="POST" enctype="multipart/form-data">
              @csrf
                @method('PUT')
                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Cover Image</label>
                  <div class="col-sm-12 col-md-7">
                    <div id="image-preview" class="image-preview"
                    style="background-image: url({{ asset("/uploads/images/$book->cover_image") }}); background-size: cover; background-position: center center;">
                      <label for="image-upload" id="image-label">Choose File</label>
                      <input type="file" name="cover_image" id="image-upload" />
                    </div>
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="title" class="form-control" value="{{ $book->title }}">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Book Category</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric" name="category_id">
                      <option value="">select category</option>
                      @foreach ($categories as $category)
                      <option {{ $category->id == $book->category_id ? 'selected' : '' }} value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Book Description</label>
                  <div class="col-sm-12 col-md-7">
                    <textarea id="ckeditor" name="description">{{ $book->description }}</textarea>
                  </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Price</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" name="price" class="form-control" value="{{ $book->price }}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Disabled Price</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" name="disabled_price" class="form-control" ">
                    </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Stock</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="stock" class="form-control" value="{{ $book->stock }}">
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Tags</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" class="form-control inputtags" name="tags" value="{{ json_decode($book->tags) }}">
                  </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Total Pages</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="text" name="num_of_page" class="form-control" value="{{ $book->num_of_page }}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Writer</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" name="writer" class="form-control" value="{{ $book->writer }}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Publisher</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="text" name="publisher" class="form-control" value="{{ $book->publisher }}">
                    </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Action</label>
                    <div class="col-sm-12 col-md-7">
                      <div class="control-label">Status</div>
                    <label class="custom-switch mt-2">
                      <input {{ $book->status == 1 ? 'checked' : '' }} type="checkbox" name="status" class="custom-switch-input">
                      <span class="custom-switch-indicator"></span>
                    </label>
                    </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Update Book</button>
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
    $(".inputtags").val();
</script>
@endpush
