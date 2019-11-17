<?php
$active['slides'] = 'active';
$bladenme = 'Homepage Slides | New ';
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
                        <h6 class="m-0 font-weight-bold text-primary">New Slide</h6>

                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <!--FORM START-->
                        <div class="row">

                            <div class="col-md-8 offset-2">
                                <form role="form" method="POST" action="{{ route('slide.store') }}" enctype="multipart/form-data">
                                    @csrf
                                    <fieldset>
                                        <legend>Slide Details</legend>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="first_name">* Title</label>
                                                <input type="text" class="form-control" name="title" value="{{ old('title') }}" id="" placeholder="Title" required autocomplete="off">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="last_name">* Info</label>
                                                <input type="text" class="form-control" name="info" value="{{ old('info') }}" id="" placeholder="Info" required autocomplete="off" >
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="">* Button Text</label>
                                                <input type="text" class="form-control" name="btn_text" value="{{ old('btn_text') }}" id="" placeholder="Button Label" required autocomplete="off">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="">URL</label>
                                                <input type="text" class="form-control" name="url" value="{{ old('url') }}" id="" placeholder="URL where button points to" autocomplete="off">
                                            </div>


                                            <div class="form-group col-md-6">
                                                <label for=""> * Banner <small>1080 x 629</small></label>
                                                <input class="" name="slider"  required type="file" accept="image/*" onchange="shwimg()" id="imgInp" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <br>
                                                <div class="" style="max-width: 200px; padding: 0; border-radius: 5px; margin: 0 auto">
                                                    <img id="imgtoshow"  src="{{ url('images/default.png') }}" class="img-fit mid-size" alt="">
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>

                                    <hr>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">
                                                    Create Slide
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

@endsection