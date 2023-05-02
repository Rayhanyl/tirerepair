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
                        <h1>Ossiana Sakti Ekamaju </h1>
                    </div>
                    <div class="page-content">
                        <section class="row">
                            <div class="row">
                                <div class="col-4">
                                    <div class="card border border-secondary rounded-5">
                                        <div class="card-body ">
                                            <h6>Dapat Memberikan Kepuasan dan Nilai Lebih Untuk Pelanggan</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card border border-secondary rounded-5">
                                        <div class="card-body">
                                            <h6>Mengedepankan Kualitas Dalam Proses Pengerjaan</h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="card border border-secondary rounded-5">
                                        <div class="card-body">
                                            <h6>Kami Memberikan Garansi Untuk Setiap Produk Kami</h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="aboutus my-5" id="aboutus">
                    <div class="page-heading">
                        <div class="divider">
                            <div class="divider-text bg-transparent">
                                <h3>
                                    <i class="bi bi-building"></i>
                                    About us
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="page-content">
                        <section class="row">
                            <div class="col-12 col-lg-6 d-flex justify-content-center">
                               <div class="col-11 img-aboutus my-auto">
                                <img class="w-100 rounded shadow img-thumbnail" src="{{ asset ('assets/images/samples/ekamaju.jpg') }}" alt="Aboutus Picture">
                               </div>
                            </div>
                            <div class="col-12 col-lg-6">
                                <p style="text-align: justify">
                                    <span class="text-primary fw-bold">PT. Ossiana Sakti Ekamaju</span> merupakan perusahaan yang bergerak dibidang jasa reparasi
                                    ban, didirikan pada tahun 1981 dan diberi lisensi oleh Vacu-lug Traction Tyres Ltd,
                                    England. Hasil reparasi pertama diluncurkan dalam tahun 1984. PT. Ossiana Sakti
                                    Ekamaju memiliki kantor pusat di yang berletak di Kota Jakarta dan menempatkan
                                    pabriknya di Kota Balikpapan, Kalimantan Timur, yang merupakan suatu tempat yang
                                    strategis dibagian tengah wilayah Indonesia.
                                </p>
                                <p style="text-align: justify">
                                    Perusahaan kami menjual jasa pelayanan mereparasi ban – ban “off the road“
                                    dengan ukuran 45/65 - 45 inch untuk ban loader dan ban berukuran 27.00 – 49 untuk
                                    ban dump truck.                                    
                                </p>
                                <p style="text-align: justify">
                                    Berpengalaman lebih dari 30 tahun merenovasi dan
                                    menambal ban "off the road" hingga ukuran 45/65 - 45 untuk loader dan ukuran ban
                                    27.00 - 49 untuk ban dump truck dengan berbagai macam jenis kecacatan seperti crack
                                    buster yaitu merupakan cacat keretakan dibagian punggung ban, dirty mould yaitu
                                    merupakan cacat ban disebabkan terdapat kotoran yang menempel atau menggumpal
                                    pada ban, dan banyak jenis cacat lainnya. PT. Ossiana Sakti Ekamaju saat ini melayani
                                    berbagai perusahaan di Sumatera, Freeport - Irian Jaya, Jawa, Kalimantan, Sulawesi,
                                    Sumbawa, dan pulau-pulau Indonesia lainnya, termasuk penebangan, konstruksi,
                                    penggalian, pabrik semen, dan perusahaan pertambangan.
                                </p>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="warranty my-5" id="warranty">
                    <div class="page-heading">
                        <div class="divider">
                            <div class="divider-text bg-transparent">
                                <h3>
                                    <i class="bi bi-shield-check"></i>
                                    Tire repair warranty 
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="page-content">
                        <section class="row d-flex justify-content-center">
                            <div class="col-12">
                                <p class="text-center">Semua ban yang direparasi oleh PT. Ossiana Sakti Ekamaju dijamin bebas dari cacat material dan pengerjaannya.</p>
                                <p>Jaminan ini tidak mencakup kerusakan karena pemakaian yang tidak sesuai seperti dipakai dalam keadaan kempes, meledak melebihi kapasitas angkut, kerusakan lapisan benang (wire steel) dan robek karena benda tajam, jaminan berlaku hingga <span class="text-primary fw-bold">500 jam</span> dalam pemakaian normal.</p>
                                <p>Dalam hal ada kegagalan yang diakibatkan oleh material dan pengerjaan, PT. Ossiana Sakti Ekamaju, melakukan penggantian dengan memperhitungkan masa pemakaian ban tersebut. Contoh :</p>
                                <p>
                                    <ol>
                                        <li>Jaminan = 500 Jam</li>
                                        <li>Umur Pemakaian Actual = 300 Jam</li>
                                        <li>Sekurangan yang harus dikembalikan = 200 Jam.</li>
                                    </ol>
                                </p>
                            </div>
                        </section>
                    </div>
                </div>

                <div class="contact my-5" id="contact">
                    <div class="page-heading">
                        <div class="divider">
                            <div class="divider-text bg-transparent">
                                <h3>
                                    <i class="bi bi-person-badge"></i>
                                    Contact us
                                </h3>
                            </div>
                        </div>
                    </div>
                    <div class="page-content">
                        <section class="row">
                            <div class="col-12 col-lg-4">
                                <p class="fw-bold">Get in touch:</p>
                                <p>
                                    <small><i class="bi bi-geo-alt"></i> 6th. Floor Gedung Manggala Wana Bhakti Blok IV, Wing Room 602 Jl. Gatot Subroto, Senayan Jakarta Indonesia,</small>
                                </p>
                                <p>
                                    <small><i class="bi bi-envelope"></i> aose-p@indo.net.id</small>
                                </p>
                                <p>
                                    <small><i class="bi bi-telephone"></i> (021) 5710487, 5736837, 7228346, 2778347</small>
                                </p>
                            </div>
                            <div class="col-12 col-lg-4">
                                <p class="fw-bold">Fabrication</p>
                                <p>
                                    <small><i class="bi bi-geo-alt"></i> Jl. Mulawarman Km. 16.5 Manggar – Balikpapan Kaltim
                                        Kode Pos : 76110, Kaltim – Indonesia<small>
                                </p>
                                <p>
                                    <i class="bi bi-envelope"></i> aose-b@indo.net.id
                                </p>
                                <p>
                                    <small><i class="bi bi-telephone"></i> (0542) 764119, 7641114, 7641115,762021</small>
                                </p>
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
