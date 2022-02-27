@extends('layouts.base')

@section('header')
<div class="section-header">
    <h1>Profile</h1>
    <div class="section-header-breadcrumb">
        <div class="breadcrumb-item active"><a href="{{ route('management') }}">Dashboard</a></div>
        <div class="breadcrumb-item"><a href="{{ route('video.index') }}">Video</a></div>

    </div>
</div>
@endsection

@section('content')
<div class="card">
    <div class="card-body" style="height: 60vh;">
        <div class="row">
            <div class="col-md-5 text-center">
                <img src="img/a1.png" class="img-thumbnail" style="border-radius: 7%; object-fit:cover" alt="...">
            </div>
            <div class="col-md-7">
                <h3>Akun anda</h3>
                <form action="">
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="Nama" class="form-control" id="nama" name="nama" placeholder="admin123" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="admin@gmail.com" disabled>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password"  class="form-control" id="password" name="password" placeholder="*********" disabled>
                    </div>
                    <td class="d-flex justify-content-end">
                            <a class="btn btn-info text-light">Edit Profile</a>
                        </td>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection