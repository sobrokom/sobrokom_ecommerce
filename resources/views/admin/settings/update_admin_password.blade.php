@extends('admin.layout.layout')
@section('content')
    <!--- Start Page Wrapper -->
    <div class="page-wrapper">
        <div class="page-content">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
                <div class="breadcrumb-title pe-3">Settings</div>
                <div class="ps-3">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb mb-0 p-0">
                            <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">Update Password</li>
                        </ol>
                    </nav>
                </div>

            </div>
            <!--end breadcrumb-->
            <div class="container">
                <div class="main-body">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="card border-top border-0 border-4 border-danger">
                                <div class="card-body p-5">
                                    <div class="card-title d-flex align-items-center">
                                        <div><i class="bx bxs-user me-1 font-22 text-danger"></i>
                                        </div>
                                        <h5 class="mb-0 text-danger">update admin password</h5>
                                    </div>
                                    <hr>
                                    @if (Session::has('error_message'))
                                        <div class="alert alert-danger" role="alert">
                                            <strong>{{ Session::get('error_message') }}</strong>
                                        </div>
                                    @endif
                                    @if (Session::has('sucess_message'))
                                        <div class="alert alert-success" role="alert">
                                            <strong>Sucess: {{ Session::get('sucess_message') }}</strong>
                                        </div>
                                    @endif
                                    <form class="row g-3" action="{{ url('admin/update_admin_password') }}" method="post">@csrf
                                        <div class="col-12">
                                            <label for="inputLastName1" class="form-label">admin username / email</label>
                                            <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                        class='bx bxs-user'></i></span>
                                                <input type="text" class="form-control border-start-0"
                                                    value="{{ $adminDetails['email'] }}" readonly="" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="inputLastName1" class="form-label">admin type</label>
                                            <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                        class='bx bxs-user'></i></span>
                                                <input type="text" class="form-control border-start-0"
                                                    value="{{ $adminDetails['type'] }}" readonly="" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="current_password" class="form-label">Current Password</label>
                                            <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                        class='bx bxs-lock-open'></i></span>
                                                <input type="text" class="form-control border-start-0" id="current_password"
                                                    name="current_password" placeholder="Enter your current Password" />
                                                <span id="check_password"></span>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="new_password" class="form-label">New Password</label>
                                            <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                        class='bx bxs-lock-open'></i></span>
                                                <input type="text" class="form-control border-start-0" id="new_password"
                                                    name="new_password" placeholder="Enter new Password" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="confirm_password" class="form-label">Confirm Password</label>
                                            <div class="input-group"> <span class="input-group-text bg-transparent"><i
                                                        class='bx bxs-lock'></i></span>
                                                <input type="text" class="form-control border-start-0" id="confirm_password"
                                                    name="confirm_password" placeholder="Enter Your Password again" />
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-danger px-5">Register</button>
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
    <!--End page wrapper-->
@endsection
