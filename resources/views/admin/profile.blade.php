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
                <h4>Profile Settings</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('admin.profile.update', auth()->user()->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name"><b>Name</b></label>
                                <input id="name" type="text" class="form-control" name="name" value="{{ auth()->user()->name }}">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name"><b>Phone</b></label>
                                <input id="name" type="text" class="form-control" name="phone" value="{{ auth()->user()->phone }}">
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name"><b>Password</b></label>
                                <input id="name" type="password" class="form-control" name="password">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name"><b>Password</b></label>
                                <input id="name" type="password" class="form-control" name="password_confirmation">
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
