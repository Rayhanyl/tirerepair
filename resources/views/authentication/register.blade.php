<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>

    <link rel="stylesheet" href="{{ asset ('assets/css/main/app.css') }}">
    <link rel="shortcut icon" href="{{ asset ('assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset ('assets/images/logo/favicon.png') }}" type="image/png">
    <link rel="stylesheet" href="{{ asset ('assets/css/shared/iconly.css') }}">

</head>

<body>
    <div id="app">
        <div id="main" class="layout-horizontal">
            <header class="mb-5">
                <div class="header-top">
                    <div class="container">
                        <div class="logo">
                            <h6>PT OSSIANA SAKTI EKAMAJU</h6>
                        </div>
                        <div class="header-top-right">
                            <div class="dropdown" style="display: none;">
                                <a href="#" id="topbarUserDropdown"
                                    class="user-dropdown d-flex align-items-center dropend dropdown-toggle "
                                    data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="avatar avatar-md2">
                                        <img src="assets/images/faces/1.jpg" alt="Avatar">
                                    </div>
                                    <div class="text">
                                        <h6 class="user-dropdown-name">John Ducky</h6>
                                        <p class="user-dropdown-status text-sm text-muted">Member</p>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end shadow-lg"
                                    aria-labelledby="topbarUserDropdown">
                                    <li><a class="dropdown-item" href="#">My Account</a></li>
                                    <li><a class="dropdown-item" href="#">Settings</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item" href="auth-login.html">Logout</a></li>
                                </ul>
                            </div>
                            <!-- Burger button responsive -->
                            <a href="#" class="burger-btn d-block d-xl-none">
                                <i class="bi bi-justify fs-3"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <nav class="main-navbar">
                    <div class="container">
                        <ul>
                            <li class="menu-item  ">
                                <a href="{{ route ('landing.page') }}" class='menu-link'>
                                    <i class="bi bi-grid-fill"></i>
                                    <span>Home</span>
                                </a>
                            </li>
                            <li class="menu-item  ">
                                <a href="{{ route ('login.page') }}" class='menu-link'>
                                    <i class="bi bi-box-arrow-in-right"></i>
                                    <span>Sign In</span>
                                </a>
                            </li>
                            <li class="menu-item  ">
                                <a href="{{ route ('register.page') }}" class='menu-link'>
                                    <i class="bi bi-person-plus"></i>
                                    <span>Sign Up</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>

            </header>

            <div class="content-wrapper container">

                <div class="home">
                    <div class="page-heading">
                        <h1>Register page</h1>
                    </div>
                    <div class="page-content">
                        <section class="row">
                            <div class="col-12 col-lg-6">
                                <img class="w-100" src="{{ asset ('assets/images/samples/register.png') }}" alt="">
                            </div>
                            <div class="col-12 col-lg-6 my-auto">
                                <div class="card shadow">
                                    <div class="card-body">
                                        <form class="form form-vertical" action="{{ route ('register') }}" method="POST">
                                            @csrf
                                            <div class="form-body">
                                                <div class="row">
                                                    <div class="col-12">
                                                        <h4>Create your account</h4>
                                                    </div>
                                                    <div class="col-12 my-2">
                                                        <div class="form-group has-icon-left">
                                                            <label for="first-name-icon">Name</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="name" placeholder="Input with icon left" id="first-name-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-person"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 my-2">
                                                        <div class="form-group has-icon-left">
                                                            <label for="email-id-icon">Email</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="email" placeholder="Email" id="email-id-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-envelope"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 my-2">
                                                        <div class="form-group has-icon-left">
                                                            <label for="Phone-id-icon">Phone number</label>
                                                            <div class="position-relative">
                                                                <input type="text" class="form-control" name="phone" placeholder="Phone" id="Phone-id-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-telephone"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 my-2">
                                                        <div class="form-group has-icon-left">
                                                            <label for="password-id-icon">Password</label>
                                                            <div class="position-relative">
                                                                <input type="password" class="form-control" name="password" placeholder="Password" id="password-id-icon">
                                                                <div class="form-control-icon">
                                                                    <i class="bi bi-lock"></i>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-12 d-flex justify-content-end">
                                                        <button type="submit" class="btn btn-primary me-1 mb-1">Sign up</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

            </div>

            <footer>
                <hr>
                <div class="container">
                    <div class="footer clearfix mb-0 text-muted">
                        <div class="float-start">
                            <p>2023 &copy; PT.OSSIANA SAKTI EKAMAJU</p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="{{ asset ('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset ('assets/js/app.js') }}"></script>
    <script src="{{ asset ('assets/js/pages/horizontal-layout.js') }}"></script>
    @include('sweetalert::alert')
    <script src="{{ asset ('assets/extensions/apexcharts/apexcharts.min.js') }}"></script>
    <script src="{{ asset ('assets/js/pages/dashboard.js') }}"></script>
</body>

</html>
