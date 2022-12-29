<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>qtashnim</title>
    <link rel="stylesheet" href={{ asset('asset/css/bootstrap.css') }}>
    <link rel="stylesheet" href={{ asset('asset/css/resa.css') }}>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">
</head>
<body>

    @include('sweetalert::alert')
    <div class="container-fluid h-100">
        <div class="row ">
            <div class="col-md-3 bg-sidebar" >
                <p class="text-center pt-3 pb-3 text-lg-center">
                  Resa
                <hr class="hr">
                </p>
            </div>
            <div class="col-md-9 bg-cofee pb-3">
                <ul class="nav nav-tabs bg-cofee float-end pt-3 pb-4">
                    <li class="nav-item">
                        <a href="#" class="nav-link active" aria-current="page">Tugas coding / Resa </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row h-100">
            <div class="col-md-3 bg-sidebar pt-2 shadow-md" >
              <nav class="nav nav-tabs flex-column rounded-2 px-1 py-1">
                  <a class="nav-link sidebar  active" href="/" >Barang</a>
                </a>
                  <a class="nav-link sidebar " href="/jenis_barang">Jenis Barang</a>
                  <a class="nav-link sidebar " href="/transaksi_terbanyak">Transaksi Terbanyak </a>
                  <a class="nav-link sidebar " href="/transaksi_terendah">Transaksi Terendah </a>

              </nav>
              <!-- <p> <button type="button" class="btn btn-float btn-outline-secondary">Menu</button>
               </p> -->
            </div>
