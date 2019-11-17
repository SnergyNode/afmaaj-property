<?php
$active['gallery'] = 'active';
$bladenme = 'Image Gallery';
?>
@extends('cms.layout.app')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4 ml-3">
            <h5 class="h5 mb-0 text-gray-800">{!! $bladenme !!}</h5>
        </div>


        <!-- Content Row -->
        <div class="row">
            <!-- Area Chart -->
            <div class="col-xl-12 col-lg-12">
                @include('cms.layout.notify')
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Image Gallery </h6>
                        <a href="{{ route('image.create') }}" class="btn btn-primary btn-xs float-right">New</a>
                    </div>
                    <!-- Card Body -->
                   @include('cms.layout.image_list')
                </div>
            </div>
        </div>



    </div>
    <!-- /.container-fluid -->

@endsection