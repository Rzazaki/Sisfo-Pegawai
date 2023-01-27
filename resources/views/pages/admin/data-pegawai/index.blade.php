@extends('layouts.dashboard')


@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
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
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011-04-25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Garrett Winters</td>
                                <td>Accountant</td>
                                <td>Tokyo</td>
                                <td>63</td>
                                <td>2011-07-25</td>
                                <td>$170,750</td>
                            </tr>
                        
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