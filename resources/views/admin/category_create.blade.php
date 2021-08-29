@php
    $page_type = 'Admin';
@endphp
@extends('admin.layouts.master')

@section('content')

<div class="main-content">
    <div class="section">
        <div class="card card-primary">
            <div class="card-header" style="border-bottom-color: #d0d0d0">
                <h4>Hello</h4>
                <div class="card-header-action">
                    <a href="" class="btn btn-warning">Go Back</a>
                </div>
            </div>
            <div class="card-body">
                <form action=""> 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input type="text" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <select class="form-select form-control" name="" id="">
                                    <option value="">Blog</option>
                                    <option value="">Book</option>
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