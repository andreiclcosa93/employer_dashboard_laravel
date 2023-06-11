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
                                    <h4 class="mb-sm-0">All Roles Permission</h4>
                                </div>
                                <div class="page-title-right mb-2">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item active text-info">All Roles Permission</li>
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
                                                <a href="{{ route('add.roles.permission') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Add Role in Permission </a>
                                            </div>
                                            {{-- id="basic-datatable" - create buttons hidden --}}
                                            {{-- <table id="basic-datatable" class="table dt-responsive nowrap w-100"> --}}
                                            <table class="table dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>Sl</th>
                                                        <th>Roles Name</th>
                                                        <th>Permission Name</th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($roles as $key=> $item)
                                                    <tr>
                                                        <td>{{ $key+1 }}</td>
                                                        <td>{{ $item->name }}</td>
                                                        <td>
                                                            @foreach($item->permissions as $perm)
                                                                <span class="badge rounded-pill bg-danger"> {{ $perm->name }} </span>
                                                            @endforeach
                                                        </td>
                                                        <td  width="18%">
                                                            <a href="{{ route('admin.edit.roles', $item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Edit</a>
                                                            <a href="{{ route('admin.delete.roles', $item->id) }}" class="btn btn-danger rounded-pill waves-effect waves-light" id="delete">Delete</a>
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
