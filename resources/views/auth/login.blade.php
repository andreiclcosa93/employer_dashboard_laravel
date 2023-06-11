@include('body.header')

    <body class="authentication-bg authentication-bg-pattern">
        <div class="account-pages mt-5 mb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-8 col-lg-6 col-xl-4">
                            <div class="card bg-pattern">

                                <div class="card-body p-4">

                                    <div class="text-center w-75 m-auto mb-4">
                                        <div class="auth-logo">
                                            <a href="index.html" class="logo logo-dark text-center">
                                                <span class="logo-lg">
                                                    <img src="{{ asset('backend/assets/images/logo-dark.png') }}" alt="" height="22">
                                                </span>
                                            </a>

                                            <a href="index.html" class="logo logo-light text-center">
                                                <span class="logo-lg">
                                                    <img src="{{ asset('backend/assets/images/logo-light.png') }}" alt="" height="22">
                                                </span>
                                            </a>
                                        </div>

                                    </div>

                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="mb-3">
                                            <label for="login" class="form-label">Email/Name/Phone</label>
                                            <input name="login" class="form-control @error('login') is-invalid @enderror" type="text" id="login" required="" placeholder="Enter your email/name/phone">
                                                @error('login')
                                                <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                        </div>

                                        <div class="mb-3">
                                            <label for="password" class="form-label">Password</label>
                                            <div class="input-group input-group-merge">
                                                <input name="password" type="password" id="password" class="form-control @error('password') is-invalid @enderror" placeholder="Enter your password">
                                                @error('password')
                                                <span class="text-danger"> {{ $message }} </span>
                                                @enderror
                                                <div class="input-group-text" data-password="false">
                                                    <span class="password-eye"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="checkbox-signin" checked>
                                                <label class="form-check-label" for="checkbox-signin">Remember me</label>
                                            </div>
                                        </div>

                                        <div class="text-center d-grid">
                                            <button class="btn btn-primary" type="submit"> Log In </button>
                                        </div>

                                    </form>

                                    <div class="text-center">
                                        <h5 class="mt-3 text-muted">Sign in with</h5>
                                        <ul class="social-list list-inline mt-3 mb-0">
                                            <li class="list-inline-item">
                                                <a href="#" class="social-list-item border-primary text-primary"><i class="mdi mdi-facebook"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="social-list-item border-danger text-danger"><i class="mdi mdi-google"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="social-list-item border-info text-info"><i class="mdi mdi-twitter"></i></a>
                                            </li>
                                            <li class="list-inline-item">
                                                <a href="#" class="social-list-item border-secondary text-secondary"><i class="mdi mdi-github"></i></a>
                                            </li>
                                        </ul>
                                    </div>

                                </div> <!-- end card-body -->
                            </div>
                            <!-- end card -->

                            <div class="row mt-3">
                                <div class="col-12 text-center">
                                    <p> <a href="auth-recoverpw.html" class="text-white-50 ms-1">Forgot your password?</a></p>
                                    <p class="text-white-50">Don't have an account? <a href="{{ route('register') }}" class="text-white ms-1"><b>Sign Up</b></a></p>
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->

                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
        </div>


@include('body.scripts')
