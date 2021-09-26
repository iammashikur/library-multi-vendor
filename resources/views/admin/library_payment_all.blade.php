@php
    $page_type = 'Admin';
@endphp
@extends('admin.layouts.master')

@section('content')

<div class="main-content">
    <div class="section">
        {{-- main card --}}
        <div class="card card-primary">
            <div class="card-header" style="border-bottom-color: #d0d0d0">
                <h4>Library Paymets</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.category.create') }}" class="btn btn-primary">
                        <b>Go back</b>
                    </a>
                </div>
            </div>
            <div class="card-body">
                {{$dataTable->table()}}
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
    {{$dataTable->scripts()}}
    {{-- this script will help to delete a entry --}}
    <script>

        $(document).on('click', '.pay', function (e) {
            e.preventDefault();
            var url = $(this).attr('href');
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                type: "PUT",
                url: url,
                success: function (response) {
                    Swal.fire(
                        'Payed!',
                        'User has been paid!',
                        'success'
                    )
                    .then((result)=>{
                        location.reload()
                    })
                }
            });
        }
    })
    });
    </script>
@endpush
