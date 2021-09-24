@php
    $page_type = 'Admin';
@endphp
@extends('admin.layouts.master')

@push('styles')
<link rel="stylesheet" href="{{ url('assets/admin/bundles/select2/dist/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ url('assets/admin/css/components.css') }}">
@endpush

@section('content')

<div class="main-content">
    <div class="section">
        {{-- show validation error --}}
        @include('admin.partials.error')
        <div class="card card-primary">
            <div class="card-header" style="border-bottom-color: #d0d0d0">
                <h4>Library Info</h4>
                <div class="card-header-action">
                    {{-- <a href="{{ route('admin.category.index') }}" class="btn btn-warning">Go Back</a> --}}
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.library.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    <div class="form-group">
                        <label for="name"><b>Library Name</b></label>
                        <input id="name" type="text" class="form-control" name="name" value="{{ @$library->name }}">
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>District</label>
                                <select class="form-control select2" name="district_id">
                                  <option value="5">Option 1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>Division</label>
                                <select class="form-control select2" name="division_id">
                                  <option value="1">Option 1</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label>City</label>
                                <select class="form-control select2" name="city_id">
                                  <option value="1">Option 3</option>
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="address"><b>Address</b></label>
                        <input id="address" type="text" class="form-control" name="address" value="{{ @$library->address }}">
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Logo</label>
                                <input class="form-control" type="file" name="logo" id="">
                                @if (isset($library->logo))
                                <div class="image-view p-3">
                                    <img width="80" src="{{ asset("uploads/images/$library->logo") }}" alt="">
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Banner</label>
                                <input class="form-control" type="file" name="banner" id="">
                                @if (isset($library->banner))
                                <div class="image-view p-3">
                                    <img width="80" src="{{ asset("uploads/images/$library->banner") }}" alt="">
                                </div>
                                @endif

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="name"><b>Library Description</b></label>
                        <textarea name="description" id="" class="form-control">{{ @$library->description }}</textarea>
                    </div>

                    <button type="submit" class="btn btn-primary"><b>create</b></button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')

<script src="{{ url('assets/admin/bundles/select2/dist/js/select2.full.min.js') }}"></script>

@endpush
