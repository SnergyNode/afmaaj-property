<?php
$active['about'] = 'active';
$bladenme = 'About';
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
                        <h6 class="m-0 font-weight-bold text-primary">About </h6>

                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <!--FORM START-->
                        <div class="row">

                            <div class="col-md-8 offset-2">
                                <form role="form" method="POST" action="{{ route('about.save') }}" enctype="multipart/form-data">
                                    @csrf
                                    <fieldset>
                                        <legend>About Details</legend>

                                        <div class="row">

                                            <div class="form-group col-md-6">
                                                <label for="last_name">* Small Title</label>
                                                <input type="text" class="form-control" name="about_title" value="{{ $about->about_title }}" id="" placeholder="small title" required autocomplete="off" >
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="">* Title</label>
                                                <input type="text" class="form-control" name="about_title2" value="{{ $about->about_title2 }}" id="" placeholder="Title" required autocomplete="off">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="">Key 1</label>
                                                <input type="text" class="form-control" name="key1" value="{{ $about->key1 }}" id="" placeholder="point" autocomplete="off">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Key 2</label>
                                                <input type="text" class="form-control" name="key2" value="{{ $about->key2 }}" id="" placeholder="point" autocomplete="off">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="">Key 3</label>
                                                <input type="text" class="form-control" name="key3" value="{{ $about->key3 }}" id="" placeholder="point" autocomplete="off">
                                            </div>

                                            <hr>

                                            <div class="form-group col-md-12">
                                                <label for="first_name">* Detail</label>
                                                <textarea type="text" class="form-control mytextarea" name="about_info"  id="" placeholder="" autocomplete="off">{!! $about->about_info !!}</textarea>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for=""> * Image <small>1080 x 629</small></label>
                                                <input class="" name="about_image"  type="file" accept="image/*" onchange="shwimg()" id="imgInp" >
                                            </div>
                                            <div class="form-group col-md-6">
                                                <br>
                                                <div class="" style="max-width: 200px; padding: 0; border-radius: 5px; margin: 0 auto">
                                                    <img id="imgtoshow"  src="{{ $about->getAboutImg() }}" class="img-fit mid-size" alt="">
                                                </div>
                                            </div>

                                        </div>
                                    </fieldset>

                                    <hr>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">
                                                    Update About
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