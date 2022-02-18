@extends('layouts.base')

@section('header')
<div class="section-header">
    <h1>Dashboard</h1>
    <div class="section-header-breadcrumb">
      <div class="breadcrumb-item active"><a href="{{ route('management') }}">Dashboard</a></div>
    </div>
  </div>

  <div class="row justify-content-center">

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col-md-5 mb-3">
                    <i class="fas fa-newspaper text-gray-300" style="font-size: 40px;"></i>
                </div>
                <div class="col-md-7 ">
                    <div class="text-start font-weight-bold text-primary text-uppercase mb-1">
                       Total berita</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">7</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Earnings (Monthly) Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-success shadow">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col-md-5 mb-3">
                      <i class="fas fa-user text-gray-300" style="font-size: 40px;"></i>
                  </div>
                <div class="col-md-7 ">
                    <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                       Pengunjung website hari ini</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">2000</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Pending Requests Card Example -->
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col-md-5 mb-3">
                    <i class="fas fa-calendar fa-5x" style="font-size: 40px;"></i>
                </div>
                <div class="col-md-7">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        jumlah agenda </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
            <div class="col-md-4 mb-3">
                    <i class="fas fa-bullhorn fa-5x" style="font-size: 35px;"></i>
                </div>
                <div class="col-md-8">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        total pengumuman </div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<table id="example" class="table table-striped" style="width:100%">
  <thead>
    <tr>
      <th>Judul</th>
      <th>Category</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
    </tbody>
    <tr>
        <td>Lorem, ipsum dolor sit amet cons.</td>
        <td>Umum</td>
        <td><a href="" class="btn btn-primary">Lihat postingan</a></td>
    </tr>
    <tr>
        <td>Lorem, ipsum dolor sit amet cons.</td>
        <td>Umum</td>
        <td><a href="" class="btn btn-primary">Lihat postingan</a></td>
    </tr>
    <tr>
        <td>Lorem, ipsum dolor sit amet cons.</td>
        <td>Umum</td>
        <td><a href="" class="btn btn-primary">Lihat postingan</a></td>
    </tr>
</table>
@endsection
