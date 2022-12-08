@extends('layouts.main')

@section('content')
    <h3 class="text-center mb-5">PERSETUJUAN ASSESMEN DAN KERAHASIAAN</h3>

    <table class="table text-dark mb-3">
        <tr>
            <td rowspan="2">Skema Sertifikasi (KKNI/Okupasi/Klaster)</td>
            <td>Judul</td>
            <td>:</td>
            <td>SKEMA  SERTIFIKASI  KKNI  LEVEL  II PADA KOMPETENSI  KEAHLIAN REKAYASA  PERANGKAT  LUNAK
                (Klaster Pemrograman Berorientasi Objek)
            </td>
        </tr>
        <tr>
            <td>Nomor</td>
            <td>:</td>
            <td>5.7.3</td>
        </tr>
        <tr>
            <td rowspan="5" colspan="2">TUK</td>
            <td>:</td>
            <td>SMK Negeri 1 Bantul</td>
        </tr>
    </table>
    <br>

    <form action="/permohonan-kompetensi/persetujuan-assesmen" method="POST">
        @csrf
        <div class="mb-3">
            <label for="nama" class="form-label fw-bold text-dark">Nama Asesor</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama"
                placeholder="Masukkan Nama Asesor" value="{{ old('nama') }}" autofocus required>
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label fw-bold text-dark">Nama Asesi</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama"
                placeholder="Masukkan Nama Asesi" value="{{ old('nama') }}" autofocus required>
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        
        <div class="table-responsive mb-5">
            <table class="table">
                <tr>
                    <td rowspan="5" colspan="1"><b>Bukti yang akan dikumpulkan</b></td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">TL : Verifikasi Portofolio</label>
                        </div>
                    </td>
                    <td>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">L : Observasi Langsung</label>
                        </div>
                    </td>
                </tr>
                    <tr>
                       <td>T: Hasil Tes Tulis
                       <input type="file" class="form-control" name="">
                       </td>
                    </tr>
                    <tr>
                        <td>T: Hasil Tes Lisan
                        <input type="file" class="form-control" name="">
                        </td>
                    </tr>
                    <td>T: Hasil Wawancara
                        <input type="file" class="form-control" name="">
                        </td>
                     </tr>
            </table>
        </div>
        <h6>Pelaksanaan asesmen disepakati pada:</h6>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label fw-bold text-dark">Hari/Tanggal</label>
            <input type="date" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir"
                id="tanggal_lahir" placeholder="Masukkan Hari/Tanggal" value="{{ old('tanggal_lahir') }}" required>
            @error('tanggal_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="tanggal_lahir" class="form-label fw-bold text-dark">Waktu</label>
            <input type="time" class="form-control @error('tanggal_lahir') is-invalid @enderror" name="tanggal_lahir"
                id="tanggal_lahir" placeholder="Masukkan Waktu" value="{{ old('tanggal_lahir') }}" required>
            @error('tanggal_lahir')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="nama" class="form-label fw-bold text-dark">TUK</label>
            <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama"
                placeholder="Masukkan Nama Asesor" value="{{ old('nama') }}" autofocus required>
            @error('nama')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
@endsection