@extends('app')
@section('content')
    <div id="main-content">

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Order Form</h3>
                        <a href="{{ route ('orderlist.page') }}" class="text-subtitle text-muted"><i class="bi bi-arrow-left"></i> Back to order list</a>
                    </div>
                    <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">Order Form</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Customer</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <section class="section">
                <div class="card">
                    <div class="card-header">
                    </div>
                    <div class="card-body">
                        <form class="row gy-4" action="#" method="#">
                            <div class="col-4">
                              <label for="customername" class="form-label fw-bold text-primary">Customer</label>
                              <input type="text" class="form-control" id="customername" name="customer" placeholder="Customer name" aria-label="Customer name">
                            </div>
                            <div class="col-4">
                              <label for="email" class="form-label fw-bold text-primary">Email</label>
                              <input type="email" class="form-control" id="email" name="email" placeholder="Email" aria-label="Email">
                            </div>
                            <div class="col-4">
                              <label for="phone" class="form-label fw-bold text-primary">Phone number</label>
                              <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone number" aria-label="Phone number">
                            </div>
                            <div class="col-3">
                              <label for="tiresize" class="form-label fw-bold text-primary">Tire size</label>
                              <input type="text" class="form-control" id="tiresize" name="tiresize" placeholder="Tire size" aria-label="Tire size">
                            </div>
                            <div class="col-3">
                              <label for="tires" class="form-label fw-bold text-primary">Number of tires</label>
                              <input type="number" class="form-control" id="tires" name="tires" placeholder="Total tires" aria-label="Total tires">
                            </div>
                            <div class="col-3">
                              <label for="delivery" class="form-label fw-bold text-primary">Tire Delivery Date</label>
                              <input type="date" class="form-control" id="delivery" name="delivery" placeholder="Delivery date" aria-label="Delivery date">
                            </div>
                            <div class="col-3">
                              <label for="orderdate" class="form-label fw-bold text-primary">Order date</label>
                              <input type="date" class="form-control" id="orderdate" name="orderdate" placeholder="Order date" aria-label="Order date">
                            </div>
                            <div class="col-12">
                              <label for="spesification" class="form-label fw-bold text-primary">Tire specifications (brand, service life, etc.)</label>
                              <textarea class="form-control" name="spesification" id="spesification" cols="30" rows="10"></textarea>
                            </div>
                            <div class="col-6 d-grid gap-2 mx-auto text-end">
                                <a href="{{ route ('orderlist.page') }}" class="btn btn-primary rounded-pill">Order <i class="bi bi-cart"></i></a>
                            </div>
                        </form>
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
