@php
    $page_type = 'Admin';
@endphp
@extends('admin.layouts.master')

@section('content')

<x-admin.main-content>
    <x-admin.card heading='Create Category'>
        <x-slot name='action'>
            <a href="#" class="btn btn-success">Go Back</a>
        </x-slot>

        <x-admin.form action="" method="">
            <div class="row">
                <div class="col-md-6">
                    <x-admin.form-input lable='hello' type='text'/>
                </div>
                <div class="col-md-6">
                    <x-admin.form-input-select name="">
                        <option value="">Blog</option>
                        <option value="">Book</option>
                    </x-admin.input-select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary"><b>Create</b></button>
        </x-admin.form>
    </x-admin.card>
</x-admin.main-content>

@endsection