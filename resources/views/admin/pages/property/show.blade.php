<?php
$active['property'] = 'active';
$route = route('property.index');
$bladenme = "<a href='$route'>Property</a> | Details";
$scriptz = ['main_admin.js'];
?>
@extends('admin.layout.app')
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
                @include('admin.layout.notify')
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Property</h6>

                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <!--FORM START-->
                        <div class="row">

                            <div class="col-md-8 offset-2">
                                <form role="form" method="POST" action="{{ route('property.update', $property->unid) }}" enctype="multipart/form-data">
                                    @csrf
                                    {{ method_field('put') }}
                                    <fieldset class="">
                                        <legend>Property Details</legend>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="first_name">* Name</label>
                                                <input type="text" class="form-control" name="name" value="{{ $property->name }}" id="" placeholder="Name" required autocomplete="off">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="first_name">* Location</label>
                                                <select name="location" id="" required class="form-control">

                                                    @foreach($locations as $location)
                                                        <option value="{{ $location->unid }}" {{ $property->location===$location->unid?'selected':'' }}>{{ $location->name }}</option>
                                                    @endforeach
                                                </select>

                                            </div>

                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="first_name">* Bedroom</label>
                                                <input type="text" class="form-control" name="bedroom" value="{{ $property->bedroom }}" id="" placeholder="Number of Bedrooms" required autocomplete="off">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="first_name">* Type</label>
                                                <input type="text" class="form-control" name="type" value="{{ $property->type }}" id="" placeholder="Type [e.g Estate]" required autocomplete="off">
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="first_name"> Price</label>
                                                <input type="text" class="form-control" name="price" value="{{ $property->price }}" id="" placeholder="Price"  autocomplete="off">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="first_name"> Toilet</label>
                                                <input type="text" class="form-control" name="toilet" value="{{ $property->toilet }}" id="" placeholder="Number of Toilet"  autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-md-12">
                                                <label for="first_name"> Information </label>
                                                <textarea type="text" class="form-control" name="info" id="" placeholder="Details of Property"  autocomplete="off">{{ $property->price }}</textarea>
                                            </div>
                                        </div>

                                        <div class=" mb-5">
                                            <div class="row ">
                                                @foreach($property->pics as $pic)
                                                    <div class="form-group col-md-4">
                                                        <br>
                                                        <div class="">
                                                            <img id="imgtoshow"  src="{{ url($pic->url) }}" class="img-fit mid-size load_img mx-w-100" alt="">
                                                            <a href="{{ route('property.image.pop', $pic->unid) }}" class="btn btn-sm btn-outline-danger"> <i class="fa fa-times"></i></a>
                                                        </div>
                                                    </div>
                                                @endforeach



                                            </div>
                                        </div>

                                        <div class="clone_append mb-5">
                                            <div class="row ">
                                                <div class="form-group col-md-6">
                                                    <label for=""> * Image <small>: Max size = 1mb</small></label>
                                                    <br>

                                                    <input class="btn btn-outline-primary multi_img" name="image[]"  type="file" accept="image/*" id="imgInp" >
                                                </div>
                                                <div class="form-group col-md-4 clone_dom">
                                                    <br>
                                                    <div class="mx-w-100" style="padding: 0; border-radius: 5px; margin: 0 auto">
                                                        <img id="imgtoshow"  src="{{ url('images/default.png') }}" class="img-fit mid-size load_img" alt="">
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <button class="btn btn-outline-success clone_item" onclick="event.preventDefault();"> <i class="fa fa-plus"></i></button> Add More


                                    </fieldset>

                                    <hr>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">
                                                    Update Property
                                                </button>
                                            </div>
                                        </div>
                                    </div>

                                </form>
                            </div>

                        </div>
                        <!--FORM END-->
                    </div>

                    <div class="clone_main" style="display: none">
                        <div class="row ">
                            <div class="form-group col-md-6">
                                <label for=""> * Image <small>: Max size = 1mb</small></label>
                                <br>

                                <input class="btn btn-outline-primary multi_img" name="image[]"  type="file" accept="image/*" id="imgInp" >
                            </div>
                            <div class="form-group col-md-4 clone_dom">
                                <br>
                                <div class="mx-w-100" style="padding: 0; border-radius: 5px; margin: 0 auto">
                                    <img id="imgtoshow"  src="{{ url('images/default.png') }}" class="img-fit mid-size load_img" alt="">
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>



    </div>
    <!-- /.container-fluid -->

@endsection