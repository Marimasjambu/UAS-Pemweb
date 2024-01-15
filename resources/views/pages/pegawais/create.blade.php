@extends('layouts.app')

@section('title', 'New Pegawai')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>New Pegawai</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item"><a href="#">Pegawai</a></div>
                    <div class="breadcrumb-item">New Pegawai</div>
                </div>
            </div>

            <div class="section-body">

                <div class="card">
                    <form action="{{ route('pegawai.store') }}" method="POST">
                        @csrf
                        <div class="card-header">
                            <h4>New Pegawai</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label>NPWP</label>
                                <input type="text"
                                    class="form-control @error('npwp')
                                    is-invalid
                                @enderror"
                                    name="npwp">
                                @error('npwp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Nama Lengkap</label>
                                <input type="text"
                                    class="form-control @error('pegawai_name')
                                    is-invalid
                                @enderror"
                                    name="pegawai_name">
                                @error('pegawai_name')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>No KTP</label>
                                <input type="text"
                                    class="form-control @error('no_ktp')
                                    is-invalid
                                @enderror"
                                    name="no_ktp">
                                @error('no_ktp')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Alamat KTP</label>
                                <textarea class="form-control" data-height="150" name="alamat_ktp"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Tanggal Lahir</label>
                                <input type="date"
                                    class="form-control @error('ttl')
                                    is-invalid
                                @enderror"
                                    name="ttl">
                                @error('ttl')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">Jenis Kelamin</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="jns_kelamin" value="Laki-laki" class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button">Laki-laki</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="jns_kelamin" value="Perempuan" class="selectgroup-input">
                                        <span class="selectgroup-button">Perempuan</span>
                                    </label>                                    
                                </div>
                            </div> 
                            <!-- <div class="form-group">
                                <label>Jenis Kelamin</label>
                                <input type="text"
                                    class="form-control @error('jns_kelamin')
                                    is-invalid
                                @enderror"
                                    name="jns_kelamin">
                                @error('jns_kelamin')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div> -->                                           
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email"
                                    class="form-control @error('email')
                                    is-invalid
                                @enderror"
                                    name="email">
                                @error('email')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>No HP</label>
                                <input type="text"
                                    class="form-control @error('phone')
                                    is-invalid
                                @enderror"
                                    name="phone">
                                @error('phone')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>No Telp Perusahaan</label>
                                <input type="text"
                                    class="form-control @error('phone_perusahaan')
                                    is-invalid
                                @enderror"
                                    name="phone_perusahaan">
                                @error('phone_perusahaan')
                                    <div class="invalid-feedback">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="form-label">No NPWP</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="no_npwp" value="Badan" class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button">Badan</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="no_npwp" value="Orang Pribadi" class="selectgroup-input">
                                        <span class="selectgroup-button">Orang Pribadi</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="no_npwp" value="BUT" class="selectgroup-input">
                                        <span class="selectgroup-button">BUT</span>
                                    </label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-label">Kependudukan</label>
                                <div class="selectgroup w-100">
                                    <label class="selectgroup-item">
                                        <input type="radio" name="kependudukan" value="Dalam Negeri" class="selectgroup-input"
                                            checked="">
                                        <span class="selectgroup-button">Dalam Negeri</span>
                                    </label>
                                    <label class="selectgroup-item">
                                        <input type="radio" name="kependudukan" value="Luar Negeri" class="selectgroup-input">
                                        <span class="selectgroup-button">Luar Negeri</span>
                                    </label>                                    
                                </div>
                            </div>
                        </div>
                        <div class="card-footer text-right">
                            <button class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
