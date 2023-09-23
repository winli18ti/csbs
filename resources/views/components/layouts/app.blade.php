<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="{{ URL::asset('css/bootstrap.min.css') }}">
        <title>Customer Service and Billing System</title>
        @livewireStyles
    </head>
    <body>
      <nav class="navbar navbar-expand bg-dark" data-bs-theme="dark">
        <div class="container-fluid">
          <div class="navbar-nav">
            <a href="#" class="nav-link active">Home</a>
            <a href="#" class="nav-link">Keluar</a>
          </div>

          <span class="d-none d-sm-block navbar-text">Senin, 11 September 2023 10:08:00</span>
        </div>
      </nav>

      <div class="container-fluid bg-danger bg-opacity-75 text-white text-center py-3">
        <div class="row">
          <div class="col-sm-3 col-lg-2">
            <p class="lead">Customer Service & Billing System</p>
          </div>
          <div class="col-sm-9 col-lg-8">
            <div class="row">
              <div class="col">
                <a href="/spks" class="text-decoration-none">
                  <span class="text-warning fw-bold">79</span>
                  <span class="text-light">Pending Orders</span>
                </a>
                <span>|</span>
                <a href="/invoices" class="text-decoration-none">
                  <span class="text-warning fw-bold">1311</span>
                  <span class="text-light">Overdue Invoices</span>
                </a>
                <span>|</span>
                <a href="/complains" class="text-decoration-none">
                  <span class="text-warning fw-bold">20</span>
                  <span class="text-light">Ticket(s) Awaiting Reply</span>
                </a>
              </div>
            </div>
            <div class="row mt-2">
              <div class="col">
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
                  Setup
                </button>

                <ul class="dropdown-menu">
                  <li><a href="/collectors" class="dropdown-item">Data kolektor</a></li>
                  <li><a href="/marketers" class="dropdown-item">Data sales marketing</a></li>
                  <li><a href="/officers" class="dropdown-item">Data teknisi</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-2">

          </div>
        </div>
      </div>

        {{ $slot }}

      <div class="container-fluid bg-danger bg-opacity-75 text-white d-flex justify-content-between py-1 my-2">
        <span>Staff: Hans Anderson</span>
        <span>Copyright 2023</span>
      </div>
      
      @livewireScripts
      <script src="{{ URL::asset('js/bootstrap.bundle.min.js') }}"></script>
    </body>
</html>
