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
                                    <h4 class="mb-sm-0">All Employee Attendence </h4>
                                </div>
                                <div class="page-title-right mb-2">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item active text-info">All Employee Attendence</li>
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

                                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>Sl</th>
                                                        <th>Date</th>
                                                        <th class="d-flex justify-content-center">
                                                            <a href="{{ route('add.employee.attend') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Add Employee Attendance  </a>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($allData as $key=> $item)
                                                    <tr>
                                                        <td>{{ $key+1 }}</td>
                                                        <td>{{ date('Y-m-d', strtotime($item->date))  }}</td>
                                                        <td class="d-flex justify-content-center">
                                                            <a href="{{ route('employee.attend.edit',$item->date) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Edit</a>
                                                            <a href="{{ route('employee.attend.view',$item->date) }}" class="btn btn-warning rounded-pill waves-effect waves-light">View</a>
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
