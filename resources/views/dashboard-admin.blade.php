@extends('layouts.base')

@section('css')
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css"> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
@endsection

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
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{DB::table('berita')->count()}}</div>
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
                                Users Website</div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{DB::table('users')->count()}}</div>
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
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{DB::table('agenda')->where('role',0)->count()}}</div>
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
                            <div class="h5 mb-0 font-weight-bold text-gray-800">{{DB::table('agenda')->where('role',1)->count()}}</div>
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
        @foreach (DB::table('berita')->orderBy('created_at', 'DESC')->get()
        as $item)
            <tr>
                <td>{{$item->judul}}</td>
                <td><a href="/index-informasi?type={{ DB::table('categories')->where('id', $item->categories)->first()->id }}" class="btn btn-danger rounded-pill border-0">{{ DB::table('categories')->where('id', $item->categories)->first()->nama }}</a></td>
                <td><a href="/detail-informasi/{{ $item->id }}" class="btn btn-primary">Lihat postingan</a></td>
            </tr>
        @endforeach
    </table>
@endsection




@section('js')
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#example').DataTable({
                language: {
                    'paginate': {
                        'previous': '<i class="bi bi-arrow-left-circle"></i>',
                        'next': '<i class="bi bi-arrow-right-circle"></i>'
                    }
                }
            });
        });
    </script>
@endsection
