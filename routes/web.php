<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\EmployeeController;
use App\Http\Controllers\Backend\CustomerController;
use App\Http\Controllers\Backend\SupplierController;
use App\Http\Controllers\Backend\SalaryController;
use App\Http\Controllers\Backend\AttendenceController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\ProductController;
use App\Http\Controllers\Backend\ExpenseController;
use App\Http\Controllers\Backend\PosController;
use App\Http\Controllers\Backend\RoleController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // return view('welcome');
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

// function - logout
Route::get('/admin/logout', [AdminController::class, 'AdminDestroy'])->name('admin.logout');

// view blade logout
Route::get('/logout', [AdminController::class, 'AdminLogoutPage'])->name('admin.logout.page');

Route::middleware(['auth'])->group(function() {

    // view blade my profile
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');

    // edit my profile
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');

    // view blade change password
    Route::get('/change/password', [AdminController::class, 'ChangePassword'])->name('change.password');

    // change password
    Route::post('/update/password', [AdminController::class, 'UpdatePassword'])->name('update.password');



    // Employee all
    Route::controller(EmployeeController::class)->group(function(){

         // view blade employee
        Route::get('/all/employee','AllEmployee')->name('all.employee');
        // with middleware
        // Route::get('/all/employee','AllEmployee')->name('all.employee')->middleware('permission:employee.all');

        // view blade add employee
        Route::get('/add/employee','AddEmployee')->name('add.employee');
        // with middleware
        // Route::get('/add/employee','AddEmployee')->name('add.employee')->middleware('permission:employee.add');

        // create employee
        Route::post('/store/employee','StoreEmployee')->name('employee.store');

        // view blade edit employee
        Route::get('/edit/employee/{id}','EditEmployee')->name('edit.employee');

         // update employee
         Route::post('/update/employee','UpdateEmployee')->name('employee.update');

        //  delete employee
        Route::get('/delete/employee/{id}','DeleteEmployee')->name('delete.employee');

    });



    // Customer all
    Route::controller(CustomerController::class)->group(function(){

        // view blade customer
        Route::get('/all/customer','AllCustomer')->name('all.customer');

        // view blade add customer
        Route::get('/add/customer','AddCustomer')->name('add.customer');

        // create customer
        Route::post('/store/customer','StoreCustomer')->name('customer.store');

       // view blade edit customer
       Route::get('/edit/customer/{id}','EditCustomer')->name('edit.customer');

        // update customer
        Route::post('/update/customer','UpdateCustomer')->name('customer.update');

       //  delete customer
       Route::get('/delete/customer/{id}','DeleteCustomer')->name('delete.customer');

    });


    // Supplier all
    Route::controller(SupplierController::class)->group(function(){

        // view blade supplier
        Route::get('/all/supplier','AllSupplier')->name('all.supplier');

        // view blade add supplier
        Route::get('/add/supplier','AddSupplier')->name('add.supplier');

        // create supplier
        Route::post('/store/supplier','StoreSupplier')->name('supplier.store');

        // view blade edit supplier
        Route::get('/edit/supplier/{id}','EditSupplier')->name('edit.supplier');

        // update supplier
        Route::post('/update/supplier','UpdateSupplier')->name('supplier.update');

        //  delete supplier
        Route::get('/delete/supplier/{id}','DeleteSupplier')->name('delete.supplier');

        // view blade details supplier
        Route::get('/details/supplier/{id}','DetailsSupplier')->name('details.supplier');

    });


        // Salary all
        Route::controller(SalaryController::class)->group(function(){

        // view blade Salary
        Route::get('/add/advance/salary','AddAdvanceSalary')->name('add.advance.salary');

        // add Salary
        Route::post('/advance/salary/store','AdvanceSalaryStore')->name('advance.salary.store');

        // view blade all Salary
        Route::get('/all/advance/salary','AllAdvanceSalary')->name('all.advance.salary');

        // view blade edit Salary
        Route::get('/edit/advance/salary/{id}','EditAdvanceSalary')->name('edit.advance.salary');

        // update Salary
        Route::post('/advance/salary/update','AdvanceSalaryUpdate')->name('advance.salary.update');

        //  delete Salary
        Route::get('/delete/supplier/{id}','DeleteSupplier')->name('delete.supplier');

        // view blade details Salary
        Route::get('/details/supplier/{id}','DetailsSupplier')->name('details.supplier');

    });



    /// Pay Salary All Route
    Route::controller(SalaryController::class)->group(function(){

            // view blade PaySalary
        Route::get('/pay/salary','PaySalary')->name('pay.salary');

        // view blade PaySalary Now
        Route::get('/pay/now/salary/{id}','PayNowSalary')->name('pay.now.salary');

        // add
        Route::post('/employe/salary/store','EmployeSalaryStore')->name('employe.salary.store');


        Route::get('/month/salary','MonthSalary')->name('month.salary');


    });


    /// Employee Attendence All Route
    Route::controller(AttendenceController::class)->group(function(){

        // view blade Attendence
        Route::get('/employee/attend/list','EmployeeAttendenceList')->name('employee.attend.list');

        // view blade Add Attendence
        Route::get('/add/employee/attend','AddEmployeeAttendence')->name('add.employee.attend');

        // Create Attendence
        Route::post('/employee/attend/store','EmployeeAttendenceStore')->name('employee.attend.store');

        // Edit Attendence
        Route::get('/edit/employee/attend/{date}','EditEmployeeAttendence')->name('employee.attend.edit');

         // View Attendence
         Route::get('/view/employee/attend/{date}','ViewEmployeeAttendence')->name('employee.attend.view');

    });

    ///Category All Route
    Route::controller(CategoryController::class)->group(function(){

         // view blade Category
        Route::get('/all/category','AllCategory')->name('all.category');

        // Add Category
        Route::post('/store/category','StoreCategory')->name('category.store');

        // Edit Category
        Route::get('/edit/category/{id}', 'EditCategory')->name('edit.category');

        // Update Category
        Route::post('/update/category','UpdateCategory')->name('category.update');

        // Update Category
        Route::get('/delete/category/{id}','DeleteCategory')->name('delete.category');

    });


    ///Product All Route
    Route::controller(ProductController::class)->group(function(){

        // view blade Product
        Route::get('/all/product','AllProduct')->name('all.product');

        // Add Product
        Route::get('/add/product','AddProduct')->name('add.product');

        // Update Product
        Route::post('/store/product','StoreProduct')->name('product.store');

        // Edit Product
        Route::get('/edit/product/{id}','EditProduct')->name('edit.product');

        // Update Product
        Route::post('/update/product','UdateProduct')->name('product.update');

        //  delete Product
        Route::get('/delete/product/{id}','DeleteProduct')->name('delete.product');

        // generator barcode
        Route::get('/barcode/product/{id}','BarcodeProduct')->name('barcode.product');

        //import Product
        Route::get('/import/product','ImportProduct')->name('import.product');

        //export Product
        Route::get('/export','Export')->name('export');

        //import Product
        Route::post('/import','Import')->name('import');

    });

    ///Category All Route
    Route::controller(ExpenseController::class)->group(function(){

        Route::get('/add/expense','AddExpense')->name('add.expense');

        Route::post('/store/expense','StoreExpense')->name('expense.store');

        Route::get('/today/expense','TodayExpense')->name('today.expense');

        Route::get('/edit/expense/{id}','EditExpense')->name('edit.expense');

        Route::post('/update/expense','UpdateExpense')->name('expense.update');

        Route::get('/month/expense','MonthExpense')->name('month.expense');

        Route::get('/year/expense','YearExpense')->name('year.expense');

    });


    ///Expense All Route
    Route::controller(PosController::class)->group(function(){

        Route::get('/pos','Pos')->name('pos');

        Route::post('/add-cart','AddCart');

        Route::get('/allitem','AllItem');


        Route::post('/create-invoice','CreateInvoice');

    });

    ///Expense All Route
    Route::controller(RoleController::class)->group(function(){

        Route::get('/all/permission','AllPermission')->name('all.permission');

        Route::get('/add/permission','AddPermission')->name('add.permission');

        Route::post('/store/permission','StorePermission')->name('permission.store');

        Route::get('/edit/permission/{id}','EditPermission')->name('edit.permission');

        Route::post('/update/permission','UpdatePermission')->name('permission.update');

        Route::get('/delete/permission/{id}','DeletePermission')->name('delete.permission');

    });

    ///Roles All Route
    Route::controller(RoleController::class)->group(function(){

        // view blade Roles
        Route::get('/all/roles','AllRoles')->name('all.roles');

        // view blade add Role
        Route::get('/add/roles','AddRoles')->name('add.roles');

        // create Role
        Route::post('/store/roles','StoreRoles')->name('roles.store');

        // view blade edit Role
        Route::get('/edit/roles/{id}','EditRoles')->name('edit.roles');

        // update Role
        Route::post('/update/roles','UpdateRoles')->name('roles.update');

        // delete Role
        Route::get('/delete/roles/{id}','DeleteRoles')->name('delete.roles');

    });

    ///Add Roles in Permission All Route
    Route::controller(RoleController::class)->group(function(){

        Route::get('/add/roles/permission','AddRolesPermission')->name('add.roles.permission');

        Route::post('/role/permission/store','StoreRolesPermission')->name('role.permission.store');

        Route::get('all/roles/permission','AllRolesPermission')->name('all.roles.permission');

        Route::get('/admin/edit/roles/{id}','AdminEditRoles')->name('admin.edit.roles');

        Route::post('/role/permission/update/{id}','RolePermissionUpdate')->name('role.permission.update');

        Route::get('/admin/delete/roles/{id}','AdminDeleteRoles')->name('admin.delete.roles');

   });

     ///Expense All Route
     Route::controller(AdminController::class)->group(function(){

        // view blade admin
        Route::get('/all/admin','AllAdmin')->name('all.admin');

        // view blade add admin
        Route::get('/add/admin','AddAdmin')->name('add.admin');

        // create admin profiles
        Route::post('/store/admin','StoreAdmin')->name('admin.store');

        // view blade edit
        Route::get('/edit/admin/{id}','EditAdmin')->name('edit.admin');

        // update profile cont
        Route::post('/update/admin','UpdateAdmin')->name('admin.update');

        //delete user
        Route::get('/delete/admin/{id}','DeleteAdmin')->name('delete.admin');




####################################################################################################

            // Database Backup
            Route::get('/database/backup','DatabaseBackup')->name('database.backup');

    });




});
