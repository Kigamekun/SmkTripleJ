@extends('layouts.base')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css"
        integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog=="
        crossorigin="anonymous" referrerpolicy="no-referrer">
@endsection


@section('header')
    <div class="section-header">
        <h1>Profile</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{ route('management') }}">Dashboard</a></div>

        </div>
    </div>
@endsection

@section('content')
    <style>
        .dropify-wrapper .dropify-message p {
            font-size: 14px;
        }

        .cards {
            position: relative;
            margin-top: 50px;
            width: 500px;
            height: 300px;
        }


        .modal-backdrop {
            display: none;
        }


        .cards:hover .overlay {
            display: block;
            background: rgba(0, 0, 0, .3);
        }

        .thmb {
            border-radius: 10px;
            position: absolute;
            width: 500px;
            height: 300px;
            left: 0;
        }

        .title {
            position: absolute;
            width: 500px;
            left: 0;
            top: 120px;
            font-weight: 700;
            font-size: 30px;
            text-align: center;
            text-transform: uppercase;
            color: white;
            z-index: 1;
            transition: top .5s ease;
        }

        .cards:hover .title {
            top: 90px;
        }

        .bts {
            position: absolute;
            width: 500px;
            left: 0;
            top: 180px;
            text-align: center;
            opacity: 0;
            transition: opacity .35s ease;
        }

        .bts button {
            width: 200px;
            padding: 12px 48px;
            text-align: center;
            color: white;
            border: solid 2px white;
            z-index: 1;
        }

        .cards:hover .bts {
            opacity: 1;
        }

    </style>

    <br>
    @if (Session::has('message'))
        <div class="alert alert-{{ session('status') }}">
            <h6 class="mt-2">{{ session('message') }}</h6>
        </div>
    @endif
    <br>
    <div class="card">
        <div class="card-body" style="height: 60vh;">
            <div class="row">
                <div class="col-md-5 text-center">
                    <div class="cards">
                        <img class="thmb"
                            src="{{ url('thumb/' . Auth::user()->thumb) }}"
                            alt="" />
                        <p class="title">Thumb</p>
                        <div class="overlay"></div>
                        <div class="bts"><button class="btn btn-primary" data-toggle="modal"
                                data-target="#exampleModal">Aw, yeah!</button></div>
                    </div>
                </div>
                <div class="col-md-7">
                    <br>
                    <br>
                    <h3>Akun anda</h3>
                    <form action="{{ route('edit-profile') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="admin123"
                                value="{{ Auth::user()->name }}">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="admin@gmail.com"
                                value="{{ Auth::user()->email }}">
                        </div>

                        <td class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-info text-light">Edit Profile</button>
                        </td>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal" style="display: none;" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="{{ route('editThumb') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <input type="file" name="gambar" class="dropify"
                            data-default-file="{{ url('thumb/' . Auth::user()->thumb) }}" data-max-width="2000"
                            data-max-width="2000" />
                    </div>
                    <div class="modal-footer bg-whitesmoke br">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection



@section('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js"
        integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script>
        $('.dropify').dropify();
    </script>
@endsection
