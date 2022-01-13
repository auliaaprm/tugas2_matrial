@extends('layouts.app')
@push('css')
<!-- BEGIN: Vendor CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('/vendors/css/vendors.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/vendors/css/forms/wizard/bs-stepper.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/vendors/css/forms/select/select2.min.css') }}">
<!-- END: Vendor CSS-->

<!-- BEGIN: Theme CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap-extended.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/colors.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/components.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/themes/dark-layout.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/themes/bordered-layout.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/themes/semi-dark-layout.min.css') }}">

<!-- BEGIN: Page CSS-->
<link rel="stylesheet" type="text/css" href="{{ asset('/css/core/menu/menu-types/vertical-menu.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/plugins/charts/chart-apex.min.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('/css/pages/app-invoice-list.min.css') }}">
@endpush

@section('content')

<div class="app-content content ">
    <div class="content-overlay"></div>
    <div class="header-navbar-shadow"></div>
    <div class="content-wrapper">
        <div class="content-header row">
        </div>
        <div class="content-body">
            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Edit Group</h1>
            </div>
            <form action="/groups/{{ $group['id'] }}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Name</label>
                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" value="{{old('name') ? old('name') : $group['name']}}">
                    @error('name')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Description</label>
                    <input type="text" class="form-control" name="description" id="exampleInputPassword1" value="{{old('description') ? old('description') : $group['description']}}">
                    @error('description')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>

                <button type="submit" class="btn btn-primary">Submit</button>
            </form>

            @endsection


            @push('script')


            <!-- BEGIN: Vendor JS-->
            <script src="{{ asset('/vendors/js/vendors.min.js') }}"></script>
            <!-- BEGIN Vendor JS-->

            <!-- BEGIN: Page Vendor JS-->

            <script src="{{ asset('/vendors/js/charts/apexcharts.min.js') }}"></script>
            <script src="{{ asset('/vendors/js/extensions/toastr.min.js') }}"></script>
            <script src="{{ asset('/vendors/js/extensions/moment.min.js') }}"></script>
            <script src="{{ asset('/vendors/js/tables/datatable/datatables.min.js') }}"></script>
            <script src="{{ asset('/vendors/js/tables/datatable/datatables.buttons.min.js') }}"></script>
            <script src="{{ asset('/vendors/js/tables/datatable/datatables.bootstrap4.min.js') }}"></script>
            <script src="{{ asset('/vendors/js/tables/datatable/dataTables.responsive.min.js') }}"></script>
            <script src="{{ asset('/vendors/js/tables/datatable/responsive.bootstrap.min.js') }}"></script>
            <!-- END: Page Vendor JS-->

            <!-- BEGIN: Theme JS-->
            <script src="{{ asset('/js/core/app-menu.min.js') }}"></script>
            <script src="{{ asset('/js/core/app.min.js') }}"></script>
            <script src="{{ asset('/js/scripts/customizer.min.js') }}"></script>
            <!-- END: Theme JS-->

            <!-- BEGIN: Page JS-->
            <script src="{{ asset('/js/scripts/pages/dashboard-analytics.min.js') }}"></script>
            <script src="{{ asset('/js/scripts/pages/app-invoice-list.min.js') }}"></script>
            <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
            <!-- Chartisan -->
            <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>

            {{-- <script>
        $(window).on('load', function() {
            const chart = new Chartisan({
                el: '#chart',
                url: "@chart('sample_chart')",
            });
            console.log('kebuka');
        })
    </script> --}}

            @endpush