@php
    $page_type = 'Admin';
@endphp
@extends('admin.layouts.master')

@section('content')

<x-admin.main-content>
    <x-admin.card heading='this is taile'>
        <x-slot name='action'>
            <x-admin.link-btn href="{{ route('admin.category.create') }}">Create Category</x-link-btn>
        </x-slot>

        <x-admin.form action="" method="">
            <x-admin.form-input lable='hello' type='text'/>
        </x-admin.form>

    </x-admin.card>
</x-admin.main-content>

@endsection