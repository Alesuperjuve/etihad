@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h2 class="card-title ps-3 text-primary">{{ __("SOFTWARE EKSTRAK PDF UAE IT BIZ") }}</h2>
                
                    <dl class="pb-3">
                        <dt>Version 1.0</dt>
                        <dd>Software Ekstrak PDF, hanya untuk data Airport Internasional</dd>
                    </dl>
                    <dl class="pb-3">
                        <dt>Fitur</dt>
                        <dd>1. Laravel - Mongodb</dd>
                        <dd>2. Basis data seperti Placard, Pesawat, Pegawai, Maskapai, dsb</dd>
                        <dd>3. Ekstraksi PDF khusus file data International Airport</dd>
                        <dd>4. Hasil ekstrak adalah format JSON dan langsung insert database Mongodb ke collection </dd>
                        <dd>5. Searching dan Pagination client-side sederhana di halaman Airport</dd>
                    </dl>
                    <dl class="pb-3">
                        <dt>Team</dt>
                        <dd>Nunung Fuadi, Osep Teja, Ali Hifni, Syauqie Muhammad Marrier, Affan</dd>
                    </dl>
                    <dl class="pb-3">
                        <dt>Produksi</dt>
                        <dd>Yogyakarta, 3 Maret 2025</dd>
                    </dl>
                

        </div>
    </div>
@endsection
