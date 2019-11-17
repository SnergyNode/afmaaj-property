<?php
$active['services'] = 'active';
$bladenme = 'Services | New ';
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
                        <h6 class="m-0 font-weight-bold text-primary">New Service</h6>

                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <!--FORM START-->
                        <div class="row">

                            <div class="col-md-8 offset-2">
                                <form role="form" method="POST" action="{{ route('service.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <fieldset>
                                        <legend>Service Details</legend>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="first_name">* Title</label>
                                                <input type="text" class="form-control" name="title" value="{{ old('title') }}" id="" placeholder="Title" required autocomplete="off">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="last_name">* Slug</label>
                                                <input type="text" class="form-control" name="slug" value="{{ old('slug') }}" id="" placeholder="Slug" required autocomplete="off" >
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for=""> * Select Image <small>1080 x 629</small></label>
                                                <br>
                                                <a href="{{ route('loadimagegallery') }}" class="btn btn-primary " rel="modal:open"> Add Image <i class="fa fa-plus"></i></a>

                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for=""> * Image ID </label>
                                                <br>
                                                <input type="text" name="image" disabled id="img_id" class="form-control" value="{{ old('image') }}" placeholder="unset" >

                                            </div>

                                            <div class="form-group col-md-12">
                                                <label for="first_name">* Detail</label>
                                                <textarea type="text" class="form-control mytextarea" name="info"  id="" placeholder="" autocomplete="off">{!! old('info') !!}</textarea>
                                            </div>

                                        </div>
                                    </fieldset>

                                    <hr>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">
                                                    Create Service
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>
                        <!--FORM END-->
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- /.container-fluid -->

    @include('cms.layout.tinymyce')
@endsection