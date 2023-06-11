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
                                    <h4 class="mb-sm-0">Year Expense</h4>
                                </div>
                                <div class="page-title-right mb-2">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('add.expense') }}">Add Expense</a></li>
                                        <li class="breadcrumb-item active text-info">Year Expense</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    <!-- end page title -->

                    @php

                        $year = date("Y");
                        $expenseyear = App\Models\Expense::where('year',$year)->sum('amount');

                    @endphp

                    <div class="content">

                        <!-- Start Content-->
                        <div class="container-fluid">
                            <h4 style=" font-size: 30px;" align="center" class="text-info"> Total : ${{ $expenseyear }}</h4>
                            <div class="row">

                                <div class="col-lg-8 col-xl-12">
                                    <div class="card">
                                        <div class="card-body">

                                            <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                                <thead>
                                                    <tr>
                                                        <th>Sl</th>
                                                        <th>Details</th>
                                                        <th>Amount</th>
                                                        <th>Year</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @foreach($yearexpense as $key=> $item)
                                                    <tr>
                                                        <td>{{ $key+1 }}</td>
                                                        <td>{{ $item->details }}</td>
                                                        <td>{{ $item->amount }}</td>
                                                        <td>{{ $item->year }}</td>
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
