<?php
$active['services'] = 'active';
$bladenme = 'Services';
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
                        <h6 class="m-0 font-weight-bold text-primary">Slides </h6>
                        <a href="{{ route('service.create') }}" class="btn btn-primary btn-xs float-right">New</a>
                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <table id="" class="table table-bordred table-striped">

                            <thead>


                            <th>Title</th>
                            <th>Image</th>
                            <th>Info</th>
                            <th>Btn Label</th>
                            <th>action</th>
                            </thead>
                            <tbody>
                            @forelse($services as $service)
                                <tr>
                                    <td>{{ $service->title }}</td>
                                    <td><img src="{{ $service->image() }}" alt="" class="mx-w-200"></td>
                                    <td>{{ $service->info }}</td>
                                    <td>{{ $service->btn_text }}</td>
                                    <td>
                                        <a class="btn btn-danger btn-xs" href="#"><span class="fa fa-edit"></span></a>
                                        <a class="btn btn-danger btn-xs" href="#"><span class="fa fa-trash"></span></a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="" colspan="5">
                                        <p class="text-center">No Slider Found. <a
                                                    href="{{ route('slide.create') }}"><b>Add</b></a> Now</p>
                                    </td>
                                </tr>
                            @endforelse

                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- /.container-fluid -->

@endsection