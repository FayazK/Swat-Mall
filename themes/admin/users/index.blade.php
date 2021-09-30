@extends('admin.layouts.admin')
@section('heading','Users')

@section('content')
    @include('admin.users.listing')
@endsection

@push('footer')
    {{$dataTable->scripts()}}
@endpush