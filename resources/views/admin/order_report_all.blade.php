@php
    $page_type = 'Admin';
@endphp
@extends('admin.layouts.master')

@push('styles')
<link rel="stylesheet" href="{{ asset('assets/admin/bundles/bootstrap-daterangepicker/daterangepicker.css') }}">
@endpush

@section('content')

<div class="main-content">
    <div class="section">
        {{-- main card --}}
        <form action="" method="GET">
            
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>From</label>
                        <input value="{{ @request('start_date') }}" type="date" name="start_date" class="form-control" id="start">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>To</label>
                        <input value="{{ @request('end_date') }}" type="date" name="end_date" class="form-control">
                    </div> 
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label></label>
                        <button type="submit" class="btn btn-primary form-control">search</button>
                    </div> 
                </div>
            
            </div>
        </form>
        <div class="card card-primary">
            <div class="card-header" style="border-bottom-color: #d0d0d0">
                <h4>All Orders</h4>
                <div class="card-header-action">
                    
                </div>
            </div>
            <div class="card-body">
                {{$dataTable->table([], true)}}
                
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    {{$dataTable->scripts()}}

    <script src="https://cdn.datatables.net/buttons/2.0.0/js/dataTables.buttons.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/2.0.0/js/buttons.print.min.js"></script>
    {{-- <script src="{{ asset('vendor/datatables/buttons.server-side.js') }}"></script> --}}

 

@endpush