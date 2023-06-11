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
                                    <h4 class="mb-sm-0">POS</h4>
                                </div>
                                <div class="page-title-right mb-2">
                                    <ol class="breadcrumb m-0">
                                        <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard</a></li>
                                        <li class="breadcrumb-item active text-info">POS</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                    <!-- end page title -->

                    <div class="row">
                        <div class="col-lg-6 col-xl-6">
                            <div class="card text-center">
                                <div class="card-body">

                                    <div class="table-responsive">
                                        <table class="table table-bordered border-primary mb-0">
                                            <thead>
                                                <tr>
                                                    <th>Name</th>
                                                    <th>QTY</th>
                                                    <th>Price</th>
                                                    <th>SubTotal</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Mark</td>
                                                    <td>
                                                        <input type="number" value="0" style="width:40px;" min="1">
                                                        <button type="submit" class="btn btn-sm btn-success" style="margin-top: -1px"> <i class="fas fa-check"></i> </button>
                                                    </td>
                                                    <td>334</td>
                                                    <td>43543</td>
                                                    <td><a href=""><i class="fas fa-trash-alt" style="color:red"></i></a></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>

                                    <div class="bg-primary">
                                        <br>
                                        <p style="font-size:18px; color:#fff"> Quantity : 3434 </p>
                                        <p style="font-size:18px; color:#fff"> SubTotal : 3434 </p>
                                        <p style="font-size:18px; color:#fff"> Vat : 3434 </p>
                                        <p><h2 class="text-white"> Total </h2> <h1 class="text-white"> 3434</h1>   </p>
                                        <br>
                                    </div>

                                    <br>
                                        <form id="myForm" method="POST" action="{{ url('/create-invoice') }}">
                                            @csrf

                                            {{-- <input type="hidden" name="id" value="{{ $item->id }}">
                                            <input type="hidden" name="name" value="{{ $item->product_name }}">
                                            <input type="hidden" name="qty" value="1">
                                            <input type="hidden" name="price" value="{{ $item->selling_price }}"> --}}

                                            <div class="form-group mb-3">
                                                <label for="firstname" class="form-label">All Customer </label>

                                                    <a href="{{ route('add.customer') }}" class="btn btn-primary rounded-pill waves-effect waves-light mb-2">Add Customer </a>

                                                    <select name="customer_id" class="form-select" id="example-select">
                                                        <option selected disabled >Select Customer </option>
                                                        @foreach($customer as $cus)
                                                            <option value="{{ $cus->id }}">{{ $cus->name }}</option>
                                                        @endforeach
                                                    </select>

                                            </div>

                                                <button class="btn btn-blue waves-effect waves-light">Create Invoice</button>


                                        </form>

                                </div>
                            </div>

                        </div>

                        <div class="col-lg-6 col-xl-6">
                            <div class="card">
                                <div class="card-body">

                                    <div class="tab-pane" id="settings">

                                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                                            <thead>
                                                <tr>
                                                    <th>Sl</th>
                                                    <th>Image</th>
                                                    <th>Name</th>
                                                    <th> </th>
                                                </tr>
                                            </thead>

                                            {{-- @php
                                                $allcart = Cart::content();
                                            @endphp --}}

                                            <tbody>
                                                @foreach($product as $key=> $item)
                                                <tr>
                                                    <form method="POST" action="{{ url('/add-cart') }}">
                                                        @csrf

                                                        <td>{{ $key+1 }}</td>
                                                        <td> <img src="{{ asset($item->product_image) }}" style="width:50px; height: 40px;"> </td>
                                                        <td>{{ $item->product_name }}</td>
                                                        <td><button type="submit" style="font-size: 20px; color: #000;" > <i class="fas fa-plus-square"></i> </button> </td>

                                                    </form>
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


<script type="text/javascript">

    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                customer_id: {
                    required : true,
                },

            },
            messages :{
                customer_id: {
                    required : 'Please Select Customer',
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
    @endsection
