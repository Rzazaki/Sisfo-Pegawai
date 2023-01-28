@extends('layouts.dashboard')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
@endsection

@section('content')
    {{-- <div class="nav">
                <div class="d-flex justify-content-between align-items-center w-100 mb-3 mb-md-0">
                    <div class="d-flex justify-content-start align-items-center">
                        <button id="toggle-navbar" onclick="toggleNavbar()">
                            <img src="./assets/img/global/burger.svg" class="mb-2" alt="">
                        </button>
                        <h2 class="nav-title">Data Pegawai</h2>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-active">Dashboard &raquo; Data Pegawai</li>
                        </ol>
                    </div>
                    <!-- <button class="btn-notif d-block d-md-none"><img src="./assets/img/global/bell.svg" alt=""></button> -->
                </div>

                <div class="d-flex justify-content-between align-items-center nav-input-container">
                    <!-- <div class="nav-input-group">
                        <input type="text" class="nav-input" placeholder="Search people, team, project">
                        <button class="btn-nav-input"><img src="./assets/img/global/search.svg" alt=""></button>
                    </div>

                    <button class="btn-notif d-none d-md-block"><img src="./assets/img/global/bell.svg" alt=""></button> -->
                </div>
    </div> --}}

    <div class="container-fluid px-4">
       <h1 class="mt-4">Data Pegawai</h1>
       <ol class="breadcrumb mb-4">
        <li class="breadcrumb-active">Dashboard &raquo; Data Pegawai</li>
       </ol>

       <div class="row justify-content-center mt-5 mb-5">
        <div class="col-xl-12">
            <div class="card overflow-auto">
                <div class="card-header">
                    Tabel Data Pegawai
                </div>
                <div class="card-body overflow-auto">
                    <a href="{{ url('pegawai/create') }}">
                        <button type="button" class="btn btn-primary mb-4" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            Tambah Data Pegawai
                        </button>
                    </a>

                 
                        <table id="example" class="table table-striped" style="width:100%">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Unit</th>
                                <th>Tanggal Masuk</th>
                                <th>Status Pegawai</th>
                                <th>Kategori Pegawai</th>
                                <th>Masa Kerja (Hari)</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach($pegawai as $dp )
                            <tr>
                                <td>{{ $dp->nama }}</td>
                                <td>{{ $dp->unit }}</td>
                                <td>{{ $dp->tgl_masuk }}</td>
                                <td>{{ $dp->status_pgw }}</td>
                                <td>{{ $dp->kategori_pgw }}</td>
                                <td>{{ $dp->masker_hari }}</td>
                                <td>
                                    <a href="/pegawai/{{ $dp->slug }}" class="text-white text-decoration-none">
                                     <button type="button" class="btn btn-primary  fs-x">
                                        <i class="bi bi-eye"></i>
                                     </button>
                                    </a>
                                   
                                </td>
                            </tr>
                           
                         @endforeach
                        </tbody>
                
                      </table>
                   
                      
                </div>
            </div>
        </div>
       </div>
    </div>
    
@endsection


@section('script')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
             $('#example').DataTable();
         });
    </script>
@endsection