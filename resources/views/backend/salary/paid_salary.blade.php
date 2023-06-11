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
                                    <h4 class="mb-sm-0">Pay Salary Now</h4>
                                </div>
                                <div class="page-title-right mb-2">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('pay.salary') }}">All Advance Salary</a></li>
                                        <li class="breadcrumb-item active text-info">Pay Salary Now</li>
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

                                            <div class="tab-pane" id="settings">
                                                <form method="post" action="{{ route('employe.salary.store') }}">
                                                    @csrf

                                                    <input type="hidden" name="id" value="{{ $paysalary->id }}">

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="employee_id" class="form-label">Employee Name</label>
                                                                <strong style="color: #fff;">{{ $paysalary->name }}</strong>
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="month" class="form-label">Salary Month</label>
                                                                <strong style="color: #fff;">{{ date("F", strtotime('-1 month')) }}</strong>
                                                                <input type="hidden" name="month" value="{{ date("F", strtotime('-1 month')) }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="year" class="form-label">Salary Year</label>
                                                                <strong style="color: #fff;">{{ $paysalary->salary }}</strong>
                                                                <input type="hidden" name="paid_amount" value="{{ $paysalary->salary }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="advance_salary" class="form-label">Advance Salary</label>
                                                                <strong style="color: #fff;">{{ $paysalary['advance']['advance_salary'] }}</strong>
                                                                <input type="hidden" name="advance_salary" value="{{ $paysalary['advance']['advance_salary'] }}">
                                                            </div>
                                                        </div>

                                                        @php
                                                            $amount = $paysalary->salary - $paysalary['advance']['advance_salary'];
                                                        @endphp

                                                        <div class="col-md-6">
                                                            <div class="mb-3">
                                                                <label for="firstname" class="form-label">Due Salary</label>
                                                                <strong style="color: #fff;">
                                                                    @if($paysalary['advance']['advance_salary'] == Null )
                                                                        <span>No Salary</span>
                                                                    @else
                                                                        {{ round($amount) }}
                                                                    @endif
                                                                </strong>
                                                                <input type="hidden" name="due_salary" value="{{ round($amount) }}">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Paid</button>
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


<script type="text/javascript">

    $(document).ready(function(){
        $('#image').change(function(e){
            var reader = new FileReader();
            reader.onload =  function(e){
                $('#showImage').attr('src',e.target.result);
            }
            reader.readAsDataURL(e.target.files['0']);
        });
    });

</script>


    @endsection
