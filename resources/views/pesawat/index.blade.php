@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Maskapai</h4>
            <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search..." onkeyup="filterTable()">
            <div class="table-responsive">
            <div class="container mt-5">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pabrikan-tab" data-bs-toggle="tab" data-bs-target="#pabrikan" type="button" role="tab" aria-controls="pabrikan" aria-selected="true">Pabrikan</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="maskapai-tab" data-bs-toggle="tab" data-bs-target="#maskapai" type="button" role="tab" aria-controls="maskapai" aria-selected="false">Maskapai</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="tipeAvion-tab" data-bs-toggle="tab" data-bs-target="#tipeAvion" type="button" role="tab" aria-controls="tipeAvion" aria-selected="false">Tipe</button>
                    </li>
                </ul>
                <div class="tab-content" id="myTabContent">
                    <!-- Konten Pabrikan -->
                    <div class="tab-pane fade show active" id="pabrikan" role="tabpanel" aria-labelledby="pabrikan-tab">
                    
                        <div class="table-responsive">
                            <table class="table table-hover" id="maskapaiTable">
                                <thead>
                                    <tr>
                                        <th class="fw-bold">No</th>
                                        <th class="fw-bold">Pabrikan</th>
                                        <th class="fw-bold">Negara</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($pesawat as $indexav => $pabrz)
                                        <tr>
                                            <td>{{ $indexav + 1 }}</td>
                                            <td>{{ $pabrz->nama }}</td>
                                            <td>{{ $pabrz->negara }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">No results</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
                        </div>

                    </div>

                    <!-- Konten maskapai -->
                    <div class="tab-pane fade" id="maskapai" role="tabpanel" aria-labelledby="maskapai-tab">
                       
                          <div class="table-responsive">
                            <table class="table table-hover" id="maskapaiTable">
                                <thead>
                                    <tr>
                                        <th class="fw-bold">No</th>
                                        <th class="fw-bold">Nama</th>
                                        <th class="fw-bold">Kode</th>
                                        <th class="fw-bold">Negara</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($maskapai as $index => $maskaz)
                                        <tr>
                                            <td>{{ $index + 1 }}</td>
                                            <td>{{ $maskaz->nama }}</td>
                                            <td>{{ $maskaz->kode }}</td>
                                            <td>{{ $maskaz->negara }}</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="3" class="text-center">No results</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
                        </div>
                    </div>

                    <!-- Konten Tipe Pesawat -->
                    <div class="tab-pane fade" id="tipeAvion" role="tabpanel" aria-labelledby="tipeAvion-tab">
                    <h3 class="mt-3">Tipe Pesawat</h3>

                    <div class="table-responsive">
                        <table class="table table-hover" id="tipeAvionTable">
                            <thead>
                                <tr>
                                    <th class="fw-bold">No</th>
                                    <th class="fw-bold">Tipe</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($tipe as $index => $tipeAvion)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $tipeAvion->tipe }}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="2" class="text-center">No results</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
                    </div>
                </div>

                </div>
            </div>
                <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
<script src="{{ asset('build/js-dubai/placard.js') }}"></script>
@endsection
