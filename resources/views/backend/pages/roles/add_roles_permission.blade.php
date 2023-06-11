@extends('admin_dashboard')

<style type="text/css">

    .form-check-label{
        text-transform: capitalize;
    }


</style>


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
                                    <h4 class="mb-sm-0">Add Role in Permission</h4>
                                </div>
                                <div class="page-title-right mb-2">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('all.permission') }}">All Permission</a></li>
                                        <li class="breadcrumb-item active text-info">Add Role in Permission</li>
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
                                                <form method="post" id="myForm" action="{{ route('role.permission.store') }}" enctype="multipart/form-data">
                                                    @csrf

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="firstname" class="form-label">All Roles </label>
                                                                <select name="role_id" class="form-select" id="example-select">
                                                                    <option selected disabled >Select Roles  </option>
                                                                    @foreach($roles as $role)
                                                                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>

                                                        <div class="form-check mb-2 form-check-primary">
                                                            <input class="form-check-input" type="checkbox" value="" id="customckeck15" >
                                                            <label class="form-check-label" for="customckeck15">Primary</label>
                                                        </div>

                                                        <hr>

                                                        @foreach($permission_groups as $group)

                                                            <div class="row">

                                                                <div class="col-3">
                                                                    <div class="form-check mb-2 form-check-primary">
                                                                        <input class="form-check-input" type="checkbox" value="" id="customckeck1">
                                                                        <label class="form-check-label" for="customckeck1">{{ $group->group_name }}</label>
                                                                    </div>
                                                                </div>

                                                                <div class="col-9">

                                                                    @php
                                                                        $permissions = App\Models\User::getpermissionByGroupName($group->group_name);
                                                                    @endphp

                                                                    @foreach($permissions as $permission)
                                                                        <div class="form-check mb-2 form-check-primary">
                                                                            <input class="form-check-input" type="checkbox" name="permission[]" value="{{ $permission->id }}" id="customckeck{{ $permission->id }}">
                                                                            <label class="form-check-label" for="customckeck{{ $permission->id }}">{{ $permission->name }}</label>
                                                                        </div>
                                                                    @endforeach
                                                                    <br>

                                                                </div>

                                                            </div>

                                                        @endforeach

                                                    </div>

                                                    <div class="text-end">
                                                        <button type="submit" class="btn btn-success waves-effect waves-light mt-2"><i class="mdi mdi-content-save"></i> Save</button>
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


<script>

    $('#customckeck15').click(function(){

        if ($(this).is(':checked')) {
            $('input[type = checkbox]').prop('checked',true);
        }else{
            $('input[type = checkbox]').prop('checked',false);
        }

    });

</script>


    @endsection
