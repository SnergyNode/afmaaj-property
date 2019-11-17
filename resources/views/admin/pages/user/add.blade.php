<?php
$active['users'] = 'active';
$bladenme = 'New Users';
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
                        <h6 class="m-0 font-weight-bold text-primary">New User</h6>

                    </div>
                    <!-- Card Body -->
                    <div class="card-body">
                        <!--FORM START-->
                        <div class="row">

                            <div class="col-md-8 offset-2">
                                <form role="form" method="POST" action="{{ route('user.store') }}">
                                    @csrf
                                    <fieldset>
                                        <legend>Account Details</legend>

                                        <div class="row">
                                            <div class="form-group col-md-6">
                                                <label for="first_name">First name</label>
                                                <input type="text" class="form-control" name="first_name" id="" placeholder="First Name" required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="last_name">Last name</label>
                                                <input type="text" class="form-control" name="last_name" id="" placeholder="Last Name" required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="">Email</label>
                                                <input type="email" class="form-control" name="email" id="" placeholder="Email" required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="">Phone Number</label>
                                                <input type="text" class="form-control" name="phone" id="" placeholder="Phone" required>
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="password">Password</label>
                                                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
                                            </div>

                                            <div class="form-group col-md-6">
                                                <label for="confirm_password">Confirm Password</label>
                                                <input type="password" class="form-control" name="confirm_password" id="confirm_password" placeholder="Confirm Password">
                                            </div>
                                            <p class="col-12"><small>Leave passwords empty to set default password</small></p>
                                        </div>




                                    </fieldset>

                                    <hr>
                                    <fieldset>
                                        <legend>Optional Details</legend>
                                        <div class="row">


                                            <div class="form-group col-md-6">
                                                <label for="country">Role</label>
                                                <select class="form-control" name="" id="country">
                                                    <option value="0">Auditor</option>
                                                    <option value="1">Admin</option>
                                                    <option value="2">Super Admin</option>
                                                </select>
                                            </div>


                                            <div class="form-group col-md-12 hidden">
                                                <label for="specify">Home Address</label>
                                                <textarea class="form-control" id="specify" name="address"></textarea>
                                            </div>
                                            <div class="form-group col-md-12 hidden">
                                                <label for="specify">Office Address</label>
                                                <textarea class="form-control" id="specify" name="office"></textarea>
                                            </div>
                                        </div>


                                    </fieldset>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" value="" id="" name="activate">
                                                        Activate account now
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <button type="submit" class="btn btn-primary">
                                                    Create Account
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