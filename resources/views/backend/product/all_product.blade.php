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
                                    <h4 class="mb-sm-0">All Product</h4>
                                </div>
                                <div class="page-title-right mb-2">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item active text-info">All Product</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    <!-- end page title -->

                    <div class="content">

                        <!-- Start Content-->
                        <div class="container-fluid">

                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="col-12 text-end mb-2">
                                                <a href="{{ route('import.product') }}" class="btn btn-warning rounded-pill waves-effect waves-light">Import</a>
                                                <a href="{{ route('export') }}" class="btn btn-success rounded-pill waves-effect waves-light">Export</a>
                                                <a href="{{ route('add.product') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Add Product</a>
                                            </div>
                                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>Sl</th>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Category</th>
                                                        <th>Supplier</th>
                                                        <th>Code</th>
                                                        <th>Price</th>
                                                        <th class="d-flex justify-content-center">

                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($product as $key=> $item)
                                                    <tr>
                                                        <td>{{ $key+1 }}</td>
                                                        <td> <img src="{{ asset($item->product_image) }}" style="width:50px; height: 40px;"> </td>
                                                        <td>{{ $item->product_name }}</td>
                                                        <td>{{ $item['category']['category_name'] }}</td>
                                                        <td>{{ $item['supllier']['name'] }}</td>
                                                        <td>{{ $item->product_code }}</td>
                                                        <td>{{ $item->selling_price }}</td>
                                                        <td>
                                                            <a href="{{ route('edit.product', $item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light"><i class="fa fa-pencil" aria-hidden="true"></i></a>
                                                            <a href="{{ route('barcode.product',$item->id) }}" class="btn btn-info rounded-pill waves-effect waves-light"><i class="fa fa-barcode" aria-hidden="true"></i></a>
                                                            <a href="{{ route('delete.product', $item->id) }}" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete"><i class="fa fa-trash" aria-hidden="true"></i></a>
                                                        </td>
                                                    </tr>
                                                    @endforeach
                                                </tbody>
                                            </table>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>


                </div>

            </div>

    @endsection
