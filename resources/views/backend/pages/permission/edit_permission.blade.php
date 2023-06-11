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
                                    <h4 class="mb-sm-0">Edit Permission</h4>
                                </div>
                                <div class="page-title-right mb-2">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="{{ route('all.permission') }}">All Permission</a></li>
                                        <li class="breadcrumb-item active text-info">Edit Permission</li>
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
                                                <form method="post" id="myForm" action="{{ route('permission.update') }}" enctype="multipart/form-data">
                                                    @csrf

                                                    <input type="hidden" name="id" value="{{ $permission->id }}">

                                                    <div class="row">

                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="firstname" class="form-label">Permission Name</label>
                                                                <input type="text" name="name" class="form-control"  value="{{ $permission->name }}">
                                                            </div>
                                                        </div>

                                                        <div class="col-md-6">
                                                            <div class="form-group mb-3">
                                                                <label for="firstname" class="form-label">Group Name </label>
                                                                <select name="group_name" class="form-select" id="example-select">
                                                                    <option selected disabled >Select Group  </option>
                                                                    <option value="pos" {{ $permission->group_name == 'pos' ? 'selected' : '' }}> Pos</option>
                                                                    <option value="employee" {{ $permission->group_name == 'employee' ? 'selected' : '' }}> Employee</option>
                                                                    <option value="customer" {{ $permission->group_name == 'customer' ? 'selected' : '' }}> Customer</option>
                                                                    <option value="supplier" {{ $permission->group_name == 'supplier' ? 'selected' : '' }}> Supplier</option>
                                                                    <option value="salary" {{ $permission->group_name == 'salary' ? 'selected' : '' }}> Salary </option>
                                                                    <option value="attendence" {{ $permission->group_name == 'attendence' ? 'selected' : '' }}> Attendence </option>
                                                                    <option value="category" {{ $permission->group_name == 'category' ? 'selected' : '' }}> Category </option>
                                                                    <option value="product" {{ $permission->group_name == 'product' ? 'selected' : '' }}> Product </option>
                                                                    <option value="expense" {{ $permission->group_name == 'expense' ? 'selected' : '' }}> Expense </option>
                                                                    <option value="orders" {{ $permission->group_name == 'orders' ? 'selected' : '' }}> Orders</option>
                                                                    <option value="stock" {{ $permission->group_name == 'stock' ? 'selected' : '' }}> Stock </option>
                                                                    <option value="roles" {{ $permission->group_name == 'roles' ? 'selected' : '' }}> Roles</option>
                                                                </select>
                                                            </div>
                                                        </div>

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
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                },
                group_name: {
                    required : true,
                },

            },
            messages :{
                name: {
                    required : 'Please Enter Permission Name',
                },
                group_name: {
                    required : 'Please Select Group Name',
                },

            },
            errorElement : 'span',
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });

</script>


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
