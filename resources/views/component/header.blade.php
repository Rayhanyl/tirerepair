<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tire Repair - OSSIANA SAKTI EKAMAJU</title>
    <link rel="stylesheet" href="{{ asset ('assets/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/pages/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/extensions/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}">
    <link rel="stylesheet" href="{{ asset ('assets/css/pages/datatables.css') }}">
    <link rel="shortcut icon" href="{{ asset ('assets/images/logo/favicon.svg') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset ('assets/images/logo/favicon.png') }}" type="image/png">
</head>

<body>
    <div id="app">
        <div id="sidebar" class="active">
            <div class="sidebar-wrapper active">
                <div class="sidebar-header position-relative">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="logo d-none d-sm-block">
                            <h6><i class="bi bi-building"></i> <small>PT OSSIANA SAKTI EKAMAJU</small> </h6>
                            <h6 class="fw-light">Tire repair company</h6>
                        </div>
                        <div class="theme-toggle d-flex gap-2  align-items-center mt-2">
                            <div class="form-check form-switch fs-6" style="display: none;">
                                <input class="form-check-input  me-0" type="checkbox" id="toggle-dark">
                                <label class="form-check-label"></label>
                            </div>
                        </div>
                        <div class="sidebar-toggler  x">
                            <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                        </div>
                    </div>
                </div>
                <div class="sidebar-menu">
                    <ul class="menu">
                        <li class="sidebar-title text-primary">Welcome Back
                            <hr>
                        </li>
                        @if ($users->role === 'customer' || $users->role === 'admin' || $users->role === 'receiver')
                        <li class="sidebar-item  ">
                            <a href="{{ route ('home.page') }}" class='sidebar-link'>
                                <i class="bi bi-grid-fill"></i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="{{ route ('catalog.page') }}" class='sidebar-link'>
                                <i class="bi bi-view-list"></i>
                                <span>Catalog</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="{{ route ('orderlist.page') }}" class='sidebar-link'>
                                <i class="bi bi-bag"></i>
                                <span>Order</span>
                            </a>
                        </li>
                        @elseif($users->role === 'scheduler' || $users->role === 'repairman')
                        <li class="sidebar-item  ">
                            <a href="index.html" class='sidebar-link'>
                                <i class="bi bi-archive"></i>
                                <span>View Order</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="index.html" class='sidebar-link'>
                                <i class="bi bi-clipboard2-data"></i>
                                <span>Production Report</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="index.html" class='sidebar-link'>
                                <i class="bi bi-calendar"></i>
                                <span>Due Date</span>
                            </a>
                        </li>
                        <li class="sidebar-item  ">
                            <a href="index.html" class='sidebar-link'>
                                <i class="bi bi-calendar-plus"></i>
                                <span>Repair Scheduling</span>
                            </a>
                        </li>
                        @endif

                    </ul>
                </div>
            </div>
        </div>
        <div id="main" class='layout-navbar'>
            <header class='mb-3'>
                <nav class="navbar navbar-expand navbar-light navbar-top">
                    <div class="container-fluid">
                        <a href="#" class="burger-btn d-block">
                            <i class="bi bi-justify fs-3"></i>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mb-lg-0">
                            </ul>
                            <div class="dropdown">
                                <a href="#" data-bs-toggle="dropdown" aria-expanded="false">
                                    <div class="user-menu d-flex">
                                        <div class="user-name text-end me-3">
                                            <h6 class="mb-0 text-gray-600 text-capitalize">{{ $users->name }}</h6>
                                            <p class="mb-0 text-sm text-gray-600 text-capitalize">{{ $users->role }}</p>
                                        </div>
                                        <div class="user-img d-flex align-items-center">
                                            <div class="avatar avatar-md">
                                                <img src="assets/images/faces/1.jpg">
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownMenuButton"
                                    style="min-width: 11rem;">
                                    <li><a class="dropdown-item" href="#"><i class="icon-mid bi bi-person me-2"></i> My
                                            Profile</a></li>
                                    <li><a class="dropdown-item" href="{{ route ('logout') }}"><i
                                                class="icon-mid bi bi-box-arrow-left me-2"></i> Logout</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </nav>
            </header>
