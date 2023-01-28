@extends('layouts.dashboard')

@section('css')
    
@endsection

@section('content')
    
    <div class="container-fluid px-4">
        
        @if (session('success'))
            {{-- <div class="alert alert-success">
                {{ session('success') }}
            </div> --}}
            <script>
                alert('{{ session('success') }}')
            </script>
        @endif

        <h1 class="mt--4">
        Pengisian Data Pegawai
    </h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb item active">Dashboard &raquo; Data Pegawai</li>
    </ol>

    <div class="row justify-content-center mb-5">
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header bg-white">

                </div>
                <div class="card-body overflow-auto">
                    <form action="{{ route('pegawai.store') }}" method="POST" enctype="mulltipart/form-data">
                    @csrf
                    <div class="col-sm-12">
                        <h4 class="mb-4">Data Pegawai</h4>

                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label">Nama</label>
                                <div class="col-sm-4">
                                    <input required type="text" class="form-control bg-white @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}"  >
                                        @error('nama')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                            <label for="inputPassword" class="col-sm-2 col-form-label">Unit Kerja</label>
                                <div class="col-sm-4">
                                    <select required   id="" class="form-select @error('unit') is-invalid @enderror" name="unit">
                                        <option selected value="" >PILIH UNIT KERJA</option>
                                        @if(old('unit'))
                                            <option  value="{{ old('unit') }}">{{ old('unit') }}</option>
                                        @endif
                                        @foreach($dataunit as $u )
                                             <option value="{{ $u->nama_unit }}">{{ $u->nama_unit }}</option>
                                        @endforeach
                                    </select>
                                    @error('unit')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                </div>
                        </div>
                        <div class="mb-3 row">
                                    <label for="inputPassword" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                                    <div class="col-sm-4">
                                     <select required   id="" class="form-select @error('jenis_kelamin') is-invalid @enderror" name="jenis_kelamin">
                                        <option selected value="" >PILIH JENIS KELAMIN</option>
                                        <option <?= (old('jenis_kelamin') == 'PRIA') ? 'selected' : '' ?>  value="PRIA">PRIA</option>
                                        <option <?= (old('jenis_kelamin') == 'WANITA') ? 'selected' : '' ?> value="WANITA">WANITA</option>
                                     </select>
                                    @error('jenis_kelamin')
                                        <div class="invalid-feedback">
                                        {{ $message }}
                                        </div>
                                    @enderror
                                  </div>
                                  <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Masuk</label>
                                  <div class="col-sm-4">
                                      <input required type="date" class="form-control bg-white @error('tgl_masuk') is-invalid @enderror" id="tgl-1" name="tgl_masuk" value="{{ old('tgl_masuk') }}"  >
                                        @error('tgl_masuk')
                                            <div class="invalid-feedback">
                                            {{ $message }}
                                            </div>
                                        @enderror
                                  </div>
                         </div>
                         
                        </div>
                        <div class="mb-3 row">
                             <label for="inputPassword" class="col-sm-2 col-form-label">Status Pegawai</label>
                             <div class="col-sm-4">
                                 <input required type="text" class="form-control bg-white @error('status_pgw') is-invalid @enderror" name="status_pgw" value="{{ old('status_pgw') }}">
                                @error('status_pgw')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                             </div>
                             <label for="inputPassword" class="col-sm-2 col-form-label">Kategori Pegawai</label>
                             <div class="col-sm-4">
                                <input required type="text" class="form-control bg-white @error('kategori_pgw') is-invalid @enderror" name="kategori_pgw" value="{{ old('kategori_pgw') }}">
                                @error('status_pgw')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                             </div>
                        </div>
                        <div class="mb-3 row">
                            <label for="inputPassword" class="col-sm-2 col-form-label" >Tanggal Angkat</label>
                            <div class="col-sm-4">
                                <input required type="date" class="form-control bg-white @error('tgl_angkat') is-invalid @enderror"  name="tgl_angkat" value="{{ old('tgl_angkat') }}">
                                @error('tgl_angkat')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                             <label for="inputPassword" class="col-sm-2 col-form-label" >Masa Kerja Hari</label>
                             <div class="col-sm-4">
                                <input required type="text" class="form-control bg-white @error('masker_hari') is-invalid @enderror" id="masker-hari" name="masker_hari" value="{{ old('masker_hari') }}">
                                @error('masker_hari')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                             </div>
                        </div>
                        <div class="mb-3 row">
                             <label for="inputPassword" class="col-sm-2 col-form-label">Masa Kerja Bln</label>
                             <div class="col-sm-4">
                                <input required type="text" class="form-control bg-white @error('masker_bulan') is-invalid @enderror" id="masker-bulan" name="masker_bulan" value="{{ old('masker_bulan') }}">
                                @error('masker_bulan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                             </div>
                             <label for="inputPassword" class="col-sm-2 col-form-label">Masa Kerja thn</label>
                             <div class="col-sm-4">
                                <input required type="text" class="form-control bg-white @error('masker_tahun') is-invalid @enderror" id="masker-tahun" name="masker_tahun" value="{{ old('masker_tahun') }}">
                                @error('masker_thn')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                             </div>
                        </div>
                        <div class="mb-3 row">
                             <label for="inputPassword" class="col-sm-2 col-form-label">Jenjab</label>
                             <div class="col-sm-4">
                                 <input required type="text" class="form-control bg-white @error('jenjab') is-invalid @enderror" name="jenjab" value="{{ old('jenjab') }}">
                                    @error('jenjab')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                             </div>
                              <label for="inputPassword" class="col-sm-2 col-form-label">Pendidikan</label>
                             <div class="col-sm-4">
                                 <input required type="text" class="form-control bg-white @error('pendidikan') is-invalid @enderror" name="pendidikan" value="{{ old('pendidikan') }}">
                                    @error('pendidikan')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                             </div>
                        </div>
                        <div class="mb-3 row">
                             <label for="inputPassword" class="col-sm-2 col-form-label">Job</label>
                             <div class="col-sm-4">
                                 <input required type="text" class="form-control bg-white @error('job') is-invalid @enderror" name="job" value="{{ old('job') }}">
                                    @error('job')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                             </div>
                              <label for="inputPassword" class="col-sm-2 col-form-label">Posisi</label>
                                <div class="col-sm-4">
                                    <input required type="text" class="form-control bg-white @error('posisi') is-invalid @enderror" name="posisi" value="{{ old('posisi') }}">
                                        @error('posisi')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                        </div>
                        <div class="mb-3 row">
                             <label for="inputPassword" class="col-sm-2 col-form-label">Tanggal Masuk Unit</label>
                             <div class="col-sm-4">
                                 <input required type="date" class="form-control bg-white @error('tgl_msk_unit') is-invalid @enderror" name="tgl_msk_unit" value="{{ old('tgl_msk_unit') }}">
                                    @error('tgl_msk_unit')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                             </div>
                        </div>
                        <div class="mb-3 row">
                             <label for="inputPassword" class="col-sm-2 col-form-label">Organisasi</label>
                             <div class="col-sm-4">
                                 <input required type="text" class="form-control bg-white @error('organisasi') is-invalid @enderror" name="organisasi" value="{{ old('organisasi') }}">
                                    @error('organisasi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                             </div>
                              <label for="inputPassword" class="col-sm-2 col-form-label">Agama</label>
                                <div class="col-sm-4">
                                    <input required type="text" class="form-control bg-white @error('agama') is-invalid @enderror" name="agama" value="{{ old('agama') }}">
                                        @error('agama')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                        </div>
                        <div class="mb-3 row">
                             <label for="inputPassword" class="col-sm-2 col-form-label">Lokasi</label>
                             <div class="col-sm-4">
                                 <input required type="text" class="form-control bg-white @error('lokasi') is-invalid @enderror" name="lokasi" value="{{ old('lokasi') }}">
                                    @error('lokasi')
                                        <div class="invalid-feedback">
                                            {{ $message }}
                                        </div>
                                    @enderror
                             </div>
                               <label for="inputPassword" class="col-sm-2 col-form-label">Email</label>
                                <div class="col-sm-4">
                                    <input required type="text" class="form-control bg-white @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}">
                                        @error('email')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                </div>
                        </div> 

                        <div class="row mt-5 justify-content-end">
                            <div class="col-sm-3 text-center">
                                <button type="submit" class="btn btn-primary">Simpan</button>
                                <a href="{{ url()->previous() }}">
                                <button type="button" class="btn btn-secondary">Kembali</button>
                                </a>
                            </div>
                        </div>
                       
                    </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    
 
@endsection

@section('script')
    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="/js/moment.js"></script>
  <script>
    // alert ("hello");
    $(document).ready(function () {
        $('#tgl-1').on('change', function () {
            // alert($('#tgl-1').val());
            var masuk = new Date($(this).val());
            var today = new Date();
            var selisih_hari = Math.floor((today - masuk) / (1000 * 60 * 60 * 24) )
            var selisih_bulan = Math.floor((selisih_hari % 365) / 30  );
            var selisih_tahun = Math.floor((selisih_hari / 365));
            // var selisih_hari = selisih / parseInt(1000 * 60 * 60 * 24); 
            // alert (selisih_tahun);
            $('#masker-hari').val(selisih_hari);
            $('#masker-bulan').val(selisih_bulan);
            $('#masker-tahun').val(selisih_tahun);
            
        })
    })
  </script>
@endsection
