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
        {{-- show validation error --}}
        @include('admin.partials.error')
        <div class="card card-primary">
            <div class="card-header" style="border-bottom-color: #d0d0d0">
                <h4>Settings</h4>
                <div class="card-header-action">
                    <a href="" class="btn btn-warning">Go Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.settings.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="logo"><b>Logo</b></label>
                                <input id="logo" type="file" class="form-control" name="logo">
                                <div class="show-image">
                                    <img width="150px"  src="{{ asset('/uploads/images/'. @$settings->logo) }}" alt="">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="Fevicon"><b>Fevicon</b></label>
                                    <input id="Fevicon" type="file" class="form-control" name="favicon">
                                    <div class="show-image">
                                        <img width="150px"  src="{{ asset('/uploads/images/'. @$settings->favicon) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group mb-0">
                                <div class="form-group">
                                    <label for="banner"><b>Banner</b></label>
                                    <input id="banner" type="file" class="form-control" name="banner_one">
                                    <div class="show-image">
                                        <img width="150px"  src="{{ asset('/uploads/images/'. @$settings->banner_one) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-none">
                            <div class="form-group mb-0">
                                <div class="form-group">
                                    <label for="banner"><b>Banner</b></label>
                                    <input id="banner" type="file" class="form-control" name="banner_two">
                                    <div class="show-image">
                                        <img width="150px"  src="{{ asset('/uploads/images/'. @$settings->banner_two) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 d-none">
                            <div class="form-group mb-0">
                                <div class="form-group">
                                    <label for="banner"><b>Banner</b></label>
                                    <input id="banner" type="file" class="form-control" name="banner_three">
                                    <div class="show-image">
                                        <img width="150px"  src="{{ asset('/uploads/images/'. @$settings->banner_three) }}" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="form-group mb-0">
                        <div class="form-group">
                            <label for="meta"><b>Meta</b></label>
                            <input id="meta" type="text" class="form-control" name="meta" value="{{ @$settings->meta }}">
                        </div>
                    </div>

                    <div class="form-group mb-0">
                        <div class="form-group">
                            <label for="meta"><b>Description</b></label>
                            <textarea name="description" class="form-control" >{{ @$settings->description }}</textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="hero_title"><b>Tags</b></label>
                        <input type="text" class="form-control inputtags" name="tags" value="{{ json_decode(@$settings->tags) }}">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="hero_title"><b>Hero H1</b></label>
                                <input id="hero_title" type="text" class="form-control" name="hero_title" value="{{ @$settings->hero_title }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="hero_sub_title"><b>Hero H2</b></label>
                                    <input id="hero_sub_title" type="text" class="form-control" name="hero_sub_title" value="{{ @$settings->hero_sub_title }}">
                                </div>
                            </div>
                        </div>

                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="basic_cradit"><b>Blog Basic Rate</b></label>
                                <input id="basic_cradit" type="text" class="form-control" name="basic_credit" value="{{ @$settings->basic_credit }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <div class="form-group">
                                    <label for="pro_cradit"><b>Blog Pro Rate</b></label>
                                    <input id="pro_cradit" type="text" class="form-control" name="pro_credit" value="{{ @$settings->pro_credit }}">
                                </div>
                            </div>
                        </div>

                    </div>

                    <button type="submit" class="btn btn-primary"><b>save</b></button>
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
<!-- Page Specific JS File -->
<script src="{{ url('assets/admin/js/page/create-post.js') }}"></script>
<script>
    $(".inputtags").val();
</script>

@endpush
