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
                    <a href="{{ route('admin.pdf.index') }}" class="btn btn-warning">Go Back</a>
                </div>
            </div>

            <div class="card-body">

             <form action="{{ route('admin.pdf.store') }}" method="POST" enctype="multipart/form-data">
              @csrf

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Cover Image</label>
                  <div class="col-sm-12 col-md-7">
                    <div id="image-preview" class="image-preview">
                      <label for="image-upload" id="image-label">Choose File</label>
                      <input type="file" name="image" id="image-upload" />
                    </div>
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
                  <div class="col-sm-12 col-md-7">
                    <input type="text" name="title" class="form-control">
                  </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pdf File</label>
                    <div class="col-sm-12 col-md-7">
                      <input type="file" name="pdf" class="form-control">
                    </div>
                  </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Book Category</label>
                  <div class="col-sm-12 col-md-7">
                    <select class="form-control selectric" name="category">
                      <option value="">select category</option>
                      @foreach ($categories as $category)
                      <option value="{{ $category->id }}">{{ $category->name }}</option>
                      @endforeach
                    </select>
                  </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pdf Description</label>
                  <div class="col-sm-12 col-md-7">
                    <textarea id="ckeditor" name="description"></textarea>
                  </div>
                </div>

                <div class="form-group row mb-4">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Action</label>
                    <div class="col-sm-12 col-md-7">
                      <div class="control-label">Status</div>
                    <label class="custom-switch mt-2">
                      <input type="checkbox" name="status" class="custom-switch-input">
                      <span class="custom-switch-indicator"></span>
                    </label>
                    </div>
                </div>

                <div class="form-group row mb-4">
                  <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                    <div class="col-sm-12 col-md-7">
                        <button class="btn btn-primary">Create Pdf</button>
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
{{-- <script src="{{ url('assets/admin/bundles/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script> --}}
<script src="{{ url('assets/admin/bundles/ckeditor/ckeditor.js') }}"></script>
<!-- Page Specific JS File -->
<script src="{{ url('assets/admin/js/page/create-post.js') }}"></script>
<script src="{{ url('assets/admin/js/page/ckeditor.js') }}"></script>
@endpush
