@php
    $page_type = 'Admin';
@endphp
@extends('admin.layouts.master')

@section('content')

<div class="main-content">
    <div class="section">
        {{-- show validation error --}}
        @include('admin.partials.error')
        <div class="card card-primary">
            <div class="card-header" style="border-bottom-color: #d0d0d0">
                <h4>Hello</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.category.index') }}" class="btn btn-warning">Go Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.category.store') }}" method="POST"> 
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name"><b>Name</b></label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="type"><b>Type</b></label>
                                <select class="form-select form-control" name="type" id="type">
                                    <option value="">select type</option>
                                    <option value="0">Blog</option>
                                    <option value="1">Book</option>
                                </select>
                            </div>
                        </div>
                    </div>  
                    <button type="submit" class="btn btn-primary"><b>create</b></button>
                </form>
            </div>
        </div>
    </div>
</div>

@endsection