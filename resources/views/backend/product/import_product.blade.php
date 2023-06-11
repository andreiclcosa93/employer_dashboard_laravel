@extends('admin_dashboard')

    @section('admin')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>

         <!-- body start -->
         <body data-layout-mode="default" data-theme="light" data-topbar-color="dark" data-menu-position="fixed" data-leftbar-color="light" data-leftbar-size='default' data-sidebar-user='false'>


            <div class="content">

                <!-- Start Content-->
                <div class="container-fluid">

                    <!-- start page title -->
                        <div class="row">
                            <div class="col-12">
                                <div class="page-title-box d-sm-flex align-items-center justify-content-between mb-2">
                                    <h4 class="mb-sm-0">Download Xlsx</h4>
                                </div>
                                <div class="page-title-right mb-2">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('all.product') }}">All Product</a></li>
                                        <li class="breadcrumb-item active text-info">Import Product</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    <!-- end page title -->

                    <div class="content">

                        <!-- Start Content-->
                        <div class="container-fluid">

                            <div class="row">

                                <div class="col-lg-8 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="col-12 text-end mb-2">
                                                <a href="{{ route('export') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Download Xlsx</a>
                                            </div>
                                            <div class="tab-pane" id="settings">
                                                <form method="post" action="{{ route('import') }}" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="product_name" class="form-label">Xlsx file Import</label>
                                                                <input type="file" name="import_file" class="form-control">
                                                                {{-- <input type="text" name="product_name" class="form-control @error('product_name') is-invalid @enderror"> --}}
                                                                {{-- @error('product_name')
                                                                <span class="text-danger"> {{ $message }} </span>
                                                                @enderror --}}
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Upload</button>
                                                    </div>
                                                </form>
                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>

                    </div>

                </div>

            </div>



    @endsection
