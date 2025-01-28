@extends('layouts.app')

@section('content')

    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Data Part Number</h4>
                <input type="text" id="searchInput" class="form-control mb-3" placeholder="Search..." onkeyup="filterTable()">
            <div class="table-responsive">
            <table class="table table-hover" id="maskapaiTable">
                    <thead>
                        <tr>
                            <th class="fw-bold">No</th>
                            <th class="fw-bold">Part Number</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($partnumber as $indexpart => $itempart)
                            <tr>
                                <td>{{ $indexpart + 1 }}</td>
                                <td>{{ $itempart->nama }}</td>
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
