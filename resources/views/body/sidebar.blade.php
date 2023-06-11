<div class="left-side-menu">

    <div class="h-100" data-simplebar>

        <!--- Sidemenu -->
        <div id="sidebar-menu">

            <ul id="side-menu">

                <li class="menu-title">Home</li>

                <li>
                    {{-- <a href="{{ url('/dashboard') }}"> --}}
                    <a href="{{ route('dashboard') }}">
                        <i class="mdi mdi-calendar"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="#backup" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> BackUpDataBase </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="backup">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('database.backup') }}">Database Backup </a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- @if(Auth::user()->can('pos.menu')) --}}
                    <li>
                        <a href="{{ route('pos') }}">
                            <span class="badge bg-pink float-end">Hot</span>
                        <i class="mdi mdi-view-dashboard-outline"></i>
                            <span> POS </span>
                        </a>
                    </li>
                {{-- @endif --}}

                <li class="menu-title mt-2">Profile</li>
                <li>
                    <a href="{{ route('admin.profile') }}">
                        <i class="mdi mdi-calendar"></i>
                        <span> My Profile </span>
                    </a>
                </li>

                <li>
                    <a href="#permision" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> Roles And Permission </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="permision">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.permission') }}">All Permission</a>
                            </li>
                            <li>
                                <a href="{{ route('all.roles') }}">All Roles</a>
                            </li>
                            <li>
                                <a href="{{ route('add.roles.permission') }}">Roles in Permission</a>
                            </li>
                            <li>
                                <a href="{{ route('all.roles.permission') }}">All Roles in Permission</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#admin" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> Setting Admin User </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="admin">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.admin') }}">All Admin</a>
                            </li>
                            <li>
                                <a href="{{ route('add.admin') }}">Add Admin</a>
                            </li>
                        </ul>
                    </div>
                </li>

                {{-- @if(Auth::user()->can('employee.menu')) --}}
                    <li>
                        <a href="#sidebarEcommerce" data-bs-toggle="collapse">
                            <i class="mdi mdi-cart-outline"></i>
                            <span> Employee Manage </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEcommerce">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('all.employee') }}">All Employee</a>
                                </li>
                                <li>
                                    <a href="{{ route('add.employee') }}">Add Employee</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                {{-- @endif  --}}

                {{-- @if(Auth::user()->can('customer.menu')) --}}
                    <li>
                        <a href="#sidebarEmail" data-bs-toggle="collapse">
                            <i class="mdi mdi-cart-outline"></i>
                            <span> Customer Manage </span>
                            <span class="menu-arrow"></span>
                        </a>
                        <div class="collapse" id="sidebarEmail">
                            <ul class="nav-second-level">
                                <li>
                                    <a href="{{ route('all.customer') }}">All Customer</a>
                                </li>
                                <li>
                                    <a href="{{ route('add.customer') }}">Add Customer</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                {{-- @endif  --}}

                <li>
                    <a href="#sidebarProjects" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> Supplier Manage </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarProjects">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.supplier') }}">All Supplier</a>
                            </li>
                            <li>
                                <a href="{{ route('add.supplier') }}">Add Supplier</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#sidebarCrm" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> Employee Salary </span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="sidebarCrm">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('add.advance.salary') }}">Add Advance Salary</a>
                            </li>
                            <li>
                                <a href="{{ route('all.advance.salary') }}">All Advance Salary</a>
                            </li>
                            <li>
                                <a href="{{ route('pay.salary') }}">Pay Salary</a>
                            </li>
                            <li>
                                <a href="{{ route('month.salary') }}">Last Month Salary</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#attendence" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> Employee Attendence</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="attendence">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('employee.attend.list') }}">Employee Attendence List</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#category" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> Category</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="category">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.category') }}">All category</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#products" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> Products</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="products">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('all.product') }}">All Products</a>
                            </li>
                            <li>
                                <a href="{{ route('add.product') }}">Add Products</a>
                            </li>
                            <li>
                                <a href="{{ route('import.product') }}">Import Products</a>
                            </li>
                        </ul>
                    </div>
                </li>

                <li>
                    <a href="#expense" data-bs-toggle="collapse">
                        <i class="mdi mdi-cart-outline"></i>
                        <span> Expense</span>
                        <span class="menu-arrow"></span>
                    </a>
                    <div class="collapse" id="expense">
                        <ul class="nav-second-level">
                            <li>
                                <a href="{{ route('add.expense') }}">Add Expense</a>
                            </li>
                            <li>
                                <a href="{{ route('today.expense') }}">Today Expense</a>
                            </li>
                            <li>
                                <a href="{{ route('month.expense') }}">Monthly Expense</a>
                            </li>
                            <li>
                                <a href="{{ route('year.expense') }}">Yearly Expense</a>
                            </li>
                        </ul>
                    </div>
                </li>

            </ul>

        </div>
        <!-- End Sidebar -->

        <div class="clearfix"></div>

    </div>
    <!-- Sidebar -left -->

</div>
