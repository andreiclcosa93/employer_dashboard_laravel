@extends('admin_dashboard')

    @section('admin')

        <!-- body start -->
        <body data-layout-mode="default" data-theme="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>


            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-2">
                                    <h4 class="mb-sm-0">Change Password</h4>
                                </div>
                                <div class="page-title-right mb-2">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('admin.profile') }}">My Profile</a></li>
                                        <li class="breadcrumb-item active text-info">Change Password</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    <!-- end page title -->

                    <div class="row">

                        <div class="col-lg-8 col-xl-8">
                            <div class="card">
                                <div class="card-body">

                                    <div class="tab-pane" id="settings">
                                        <form method="POST" action="{{ route('update.password') }}">
                                            @csrf
                                            <h5 class="mb-4 text-uppercase"><i class="mdi mdi-account-circle me-1"></i> Personal Info</h5>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label  for="old_password" class="form-label">Old Password</label>
                                                        <input type="password" name="old_password" class="form-control @error('old_password') is-invalid @enderror" id="current_password" >
                                                            @error('old_password')
                                                                <span class="text-danger"> {{ $message }} </span>
                                                            @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label  for="new_password" class="form-label">New Password</label>
                                                        <input type="password" name="new_password" class="form-control @error('new_password') is-invalid @enderror" id="new_password" >
                                                            @error('new_password')
                                                                <span class="text-danger"> {{ $message }} </span>
                                                            @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-12">
                                                    <div class="mb-3">
                                                        <label  for="new_password_confirmation" class="form-label">Confirmation New Password</label>
                                                        <input type="password" name="new_password_confirmation" class="form-control" id="new_password_confirmation" >
                                                    </div>
                                                </div>


                                                <div class="text-end">
                                                    <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Change</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>

            </div>



    @endsection
