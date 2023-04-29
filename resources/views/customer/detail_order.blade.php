@extends('app')
@section('content')
<div id="main-content">

    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Detail order</h3>
                    <a href="{{ route ('orderlist.page') }}" class="text-subtitle text-muted"><i
                            class="bi bi-arrow-left"></i> Back to order list</a>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Detail order</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Customer</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section my-4">
            <div class="card">
                <div class="card-header">
                    <h2 class="card-title">Rayhan yuda lesmana</h2>
                </div>
                <div class="card-body row">
                    <div class="col-12 my-3">
                        <h6>Detail order</h6>
                        <p>ukuran ban 27.00 - 49, jumlah ban 4, Michelin XZ, Umur pakai 4 tahun</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <h6>Minor/Major Repair</h6>
                        <p>4 Minor tire repairs</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <h6>Estimationdue date</h6>
                        <p>29 April - 1 Mei</p>
                    </div>
                    <div class="col-12 col-lg-4">
                        <h6>Invoice</h6>
                        <p>haven't made a payment yet</p>
                    </div>
                    <div class="col-12 col-lg-8 my-3">
                        <h6>Upload proof of payment</h6>
                        <form action="#" method="#">
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="inputGroupFile01">
                            </div>
                        </form>
                        <a href="#" class="btn btn-outline-primary btn-sm rounded-pill fw-bold">download invoice dp <i class="bi bi-file-earmark-arrow-down"></i></a>
                    </div>
                    <div class="col-12 col-lg-4 my-3">
                        <h6>Status</h6>
                        <p>Currently wait payment</p>
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
