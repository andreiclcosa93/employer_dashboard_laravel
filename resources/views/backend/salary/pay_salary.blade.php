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
                                    <h4 class="mb-sm-0">Pay Salary</h4>
                                </div>
                                <div class="page-title-right mb-2">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item active text-info">Pay Salary</li>
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
                                            <h4 class="header-title">{{ date("F Y") }}</h4>

                                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>Sl</th>
                                                        <th>Image</th>
                                                        <th>Name</th>
                                                        <th>Month</th>
                                                        <th>Salary</th>
                                                        <th>Advance</th>
                                                        <th>Due</th>
                                                        <th class="d-flex justify-content-center">
                                                            <a href="{{ route('add.advance.salary') }}" class="btn btn-primary rounded-pill waves-effect waves-light">Add Advance Salary</a>
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($employee as $key=> $item)
                                                    <tr>
                                                        <td>{{ $key+1 }}</td>
                                                        <td> <img src="{{ asset($item->image) }}" style="width:50px; height: 40px;"> </td>
                                                        <td>{{ $item->name }}</td>
                                                        <td><span class="badge bg-info"> {{ date("F", strtotime('-1 month')) }} </span> </td>
                                                        <td> {{ $item->salary }} </td>
                                                        <td>
                                                            @if($item['advance']['advance_salary'] == NULL )
                                                                <p>No Advance</p>
                                                            @else
                                                                {{ $item['advance']['advance_salary'] }}
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @php
                                                                $amount = $item->salary - $item['advance']['advance_salary'];
                                                            @endphp

                                                            <strong style="color: #fff;"> {{ round($amount) }} </strong>
                                                        </td>
                                                        <td class="d-flex justify-content-center">
                                                            <a href="{{ route('pay.now.salary', $item->id) }}" class="btn btn-blue rounded-pill waves-effect waves-light">Pay Now</a>
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
