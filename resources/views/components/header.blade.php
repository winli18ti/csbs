<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <title>Customer Service and Billing</title>
        {{-- Sweet Alert --}}
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        @livewireStyles
    </head>
    <body class="d-flex flex-column min-vh-100">
        @if(Auth::user()->role ?? '')
        <nav class="navbar navbar-expand bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
            <div class="navbar-nav">
            @if(Auth::user()->role ?? '')
                {{-- <a href="/home" class="nav-link {{ request()->is('home') ? 'active' : '' }}">Home</a> --}}
                <a href="/account" class="nav-link {{ request()->is('account') ? 'active' : '' }}">Akun</a>
                <a class="nav-link" class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Keluar</a>
                <form id="logout-form" action="{{ route('logout') }}" method="post">@csrf</form>
            @else
                <a href="#" class="nav-link">Login</a>
            @endif
            </div>

            <span class="d-none d-sm-block navbar-text" id="currentTime"></span>
        </div>
        </nav>

        <div class="container-fluid bg-danger bg-opacity-75 text-white text-center py-3">
            <div class="row">
                <div class="col-sm-3 col-lg-2">
                    <p class="lead">Customer Service & Billing System</p>
                </div>
                @if(Auth::user()->role ?? '')
                    <div class="col-sm-9 col-lg-8">
                        <div class="row">
                            <div class="col">
                                <a href="/spks" class="text-decoration-none">
                                    <span class="text-warning fw-bold">{{ App\Models\Spk::where('status', 'blm proses')->orWhere('status', 'pengerjaan')->count() }}</span>
                                    <span class="text-light">Pending Orders</span>
                                </a>
                                <span>|</span>
                                <a href="/invoices" class="text-decoration-none">
                                    <span class="text-warning fw-bold">{{ App\Models\Invoice::where('status', 'belum lunas')->count() }}</span>
                                    <span class="text-light">Overdue Invoices</span>
                                </a>
                                <span>|</span>
                                <a href="/complains" class="text-decoration-none">
                                    <span class="text-warning fw-bold">{{ App\Models\Complain::where('status', 'tunggu')->orWhere('status', 'proses')->count() }}</span>
                                    <span class="text-light">Ticket(s) Awaiting Reply</span>
                                </a>
                            </div>
                        </div>
                        <div class="row mt-2">
                            <div class="col">
                                    <a href="/home" class="btn btn-danger btn-sm mt-1">
                                        Home
                                    </a>

                                <button class="btn btn-danger btn-sm mt-1" 
                                data-bs-toggle="dropdown">
                                    Customer
                                </button>
                                <ul class="dropdown-menu">
                                <li><a href="/customers" class="dropdown-item">Data pelanggan</a></li>
                                </ul>

                                <button class="btn btn-danger btn-sm mt-1" 
                                data-bs-toggle="dropdown">
                                Installation
                                </button>

                                <ul class="dropdown-menu">
                                <li><a href="/complains" class="dropdown-item">Data pengaduan</a></li>
                                <li><a href="/spks" class="dropdown-item">Data SPK</a></li>
                                </ul>

                                <button class="btn btn-danger btn-sm mt-1" 
                                data-bs-toggle="dropdown">
                                Billing
                                </button>

                                <ul class="dropdown-menu">
                                <li><a href="/invoices" class="dropdown-item">Data tagihan</a></li>
                                </ul>

                                <button class="btn btn-danger btn-sm mt-1" 
                                data-bs-toggle="dropdown">
                                Finance
                                </button>

                                <ul class="dropdown-menu">
                                <li><a href="/summary_invoice" class="dropdown-item">Rekap periode tagihan</a></li>
                                <li><a href="/summary_paid_invoice" class="dropdown-item">Rekap penerimaan harian</a></li>
                                <li><a href="/summary_paid_detail" class="dropdown-item">Rekap penerimaan detail</a></li>
                                <li><a href="/summary_payment" class="dropdown-item">Rekap pembayaran pelanggan</a></li>
                                <li><a href="/summary_collector" class="dropdown-item">Penerimaan kolektor harian</a></li>
                                </ul>

                                <button class="btn btn-danger btn-sm mt-1" 
                                data-bs-toggle="dropdown">
                                Report
                                </button>

                                <ul class="dropdown-menu">
                                <li><a href="/report_income_paid" class="dropdown-item">Laporan penerimaan pembayaran</a></li>
                                <li><a href="/report_income" class="dropdown-item">Laporan penerimaan tagihan</a></li>
                                <li><a href="/report_sales" class="dropdown-item">Laporan penjualan sales</a></li>
                                <li><a href="/report_node" class="dropdown-item">Grafik utilisasi node pelanggan</a></li>
                                <li><a href="/report_complain" class="dropdown-item">Grafik pengaduan pelanggan</a></li>
                                <li><a href="/report_selling" class="dropdown-item">Grafik penjualan produk</a></li>
                                <li><a href="/report_dismantle_date" class="dropdown-item">Grafik pemutusan tanggal dismantle</a></li>
                                <li><a href="/report_dismantle_regs" class="dropdown-item">Grafik pemutusan tanggal registrasi</a></li>
                                </ul>

                                <button class="btn btn-danger btn-sm mt-1" 
                                data-bs-toggle="dropdown">
                                IT NOC
                                </button>

                                <ul class="dropdown-menu">
                                <li><a href="/noc_tools" class="dropdown-item">Docsis Log Viewer</a></li>
                                </ul>

                                <button class="btn btn-danger btn-sm mt-1" 
                                data-bs-toggle="dropdown">
                                Setup
                                </button>

                                <ul class="dropdown-menu">
                                <li><a href="/collectors" class="dropdown-item">Data kolektor</a></li>
                                <li><a href="/marketers" class="dropdown-item">Data sales marketing</a></li>
                                <li><a href="/officers" class="dropdown-item">Data teknisi</a></li>
                                <li><a href="/users" class="dropdown-item">Data user</a></li>
                                <li><a href="/services" class="dropdown-item">Data layanan</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-2">

                    </div>
                @else
                    
                @endif
            </div>
        </div>
        @endif