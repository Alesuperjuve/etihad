@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Pegawai</h4>
            <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search..." onkeyup="filterTable()">
            <div class="table-responsive">
                <table class="table table-hover" id="pegawaiTable">
                    <thead>
                        <tr>
                            <th class="fw-bold">No</th>
                            <th class="fw-bold">Nama</th>
                            <th class="fw-bold">Pos</th>
                            <th class="fw-bold">Negara</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($pegawai as $index => $pegaz)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $pegaz->nama }}</td>
                                <td>{{ $pegaz->pos }}</td>
                                <td>{{ $pegaz->negara }}</td>
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
    </div>

@endsection

@section('scripts')
<script src="{{ asset('build/js-dubai/placard.js') }}"></script>
@endsection
