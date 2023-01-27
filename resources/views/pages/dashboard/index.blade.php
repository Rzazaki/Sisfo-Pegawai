@extends('layouts.dashboard')


@section('css')
    
@endsection

@section('content')
 <div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb item active clock"></li>
    </ol>

          <div class="content">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="statistics-card simple">

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column justify-content-around align-items-start employee-stat">
                                    <h5 class="content-desc">Total Pegawai</h5>

                                    <h3 class="statistics-value">{{ $total }}</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="statistics-card simple">

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column justify-content-around align-items-start employee-stat">
                                    <h5 class="content-desc">Pegawai Pria</h5>

                                    <h3 class="statistics-value">205,399</h3>
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-6 col-lg-4">
                        <div class="statistics-card simple">

                            <div class="d-flex justify-content-between align-items-center">
                                <div class="d-flex flex-column justify-content-around align-items-start employee-stat">
                                    <h5 class="content-desc">Pegawai Wanita</h5>

                                    <h3 class="statistics-value">142,593</h3>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

    </div>

  
        
           

          
@endsection