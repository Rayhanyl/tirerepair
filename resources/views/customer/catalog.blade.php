@extends('app')
@section('content')
    <div id="main-content">

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Repair Catalog</h3>
                        <p class="text-subtitle text-muted">Navbar will appear on the top of the page.</p>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Repair Catalog</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Customer</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="card-title">Tire Repair Cost Estimation</h2>
                            <hr>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12 col-lg-6 text-center">
                                    <h6>Minor Repair</h6>
                                    <p>Rp 10.000.000 – Rp 20.000.000</p>
                                </div>
                                <div class="col-12 col-lg-6 text-center">
                                    <h6>Major Repair</h6>
                                    <p>Rp 20.000.000 – Rp 30.000.000</p>
                                </div>
                                <div class="col-12 my-1 d-flex justify-content-center">
                                    <a href="{{ route ('orderform.page') }}" class="btn icon btn-outline-primary rounded-pill"> Continue Booking <i class="bi bi-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

        <footer>
            <div class="footer clearfix mb-0 text-muted">
                <div class="float-start">
                    <p>2023 &copy; PT.OSSIANA SAKTI EKAMAJU</p>
                </div>
            </div>
        </footer>
    </div>
@endsection
