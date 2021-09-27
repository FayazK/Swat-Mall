@extends('admin.layouts.admin')
@section('heading','Users')

@section('content')
    @include('admin.users.listing')
@endsection

@push('footer')
    <script>
      let table
      $(document).ready(function () {
        table = $('#listing-table').dataTable({
          'processing': true,
          'serverSide': true,
          'ajax': "{{route('admin.users.all.ajax')}}"
        })
      })
    </script>
@endpush