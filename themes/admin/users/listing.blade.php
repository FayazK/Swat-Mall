@extends('admin.layouts.admin')
@section('heading','Users')
@section('content')
    <div class="row">
        <div class="col">
            <div class="card card-primary card-outline">
                <div class="card-body">
                    {{$dataTable->table()}}
                </div>
                <div class="card-footer text-right" data-scroll-fix="bottom">
                    <button type="submit" class="btn btn-primary">Save Settings</button>
                </div>
            </div>
        </div>
    </div>
@endsection
