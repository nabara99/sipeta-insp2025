@extends('layouts.app')

@section('title', '')

@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-timepicker/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-body">
                <div class="row">
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Buat Sub Kegiatan</h4>
                                <div class="card-header-action">
                                    <a href="{{ route('sub.index') }}" class="btn btn-primary btn-icon"><i
                                            class="fa-solid fa-arrow-rotate-left"></i></a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('sub.store') }}" method="POST">
                                    @csrf
                                    <div class="form-group">
                                        <label class="form-label">Kegiatan</label>
                                        <select class="form-control selectric @error('kegiatan_id') is-invalid @enderror"
                                            name="kegiatan_id">
                                            <option value="" selected disabled>-- Pilih Kegiatan --</option>
                                            @foreach ($kegiatans as $kegiatan)
                                                <option value="{{ $kegiatan->id }}"
                                                    {{ old('kegiatan_id') == $kegiatan->id ? 'selected' : '' }}>
                                                    {{ $kegiatan->nama_kegiatan }}</option>
                                            @endforeach
                                        </select>
                                        @error('kegiatan_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Kode Sub Kegiatan</label>
                                        <input type="text" value="{{ old('kode_sub') }}"
                                            class="form-control @error('kode_sub')
                                        is-invalid
                                    @enderror"
                                            name="kode_sub">
                                        @error('kode_sub')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label>Nama Sub Kegiatan</label>
                                        <input type="text" value="{{ old('nama_sub') }}"
                                            class="form-control @error('nama_sub')
                                        is-invalid
                                    @enderror"
                                            name="nama_sub">
                                        @error('nama_sub')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label class="form-label">PPTK</label>
                                        <select class="form-control selectric @error('pptk_id') is-invalid @enderror"
                                            name="pptk_id">
                                            <option value="" selected disabled>-- Pilih PPTK --</option>
                                            @foreach ($pptks as $pptk)
                                                <option value="{{ $pptk->id }}"
                                                    {{ old('pptk_id') == $pptk->id ? 'selected' : '' }}>
                                                    {{ $pptk->nip_pptk }} / {{ $pptk->nama_pptk }}</option>
                                            @endforeach
                                        </select>
                                        @error('pptk_id')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                    <div class="card-footer text-right">
                                        <button class="btn btn-primary">Simpan</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/cleave.js/dist/cleave.min.js') }}"></script>
    <script src="{{ asset('library/cleave.js/dist/addons/cleave-phone.us.js') }}"></script>
    <script src="{{ asset('library/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('library/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-timepicker/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('library/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/forms-advanced-forms.js') }}"></script>
@endpush
