<div class="table-responsive">
    <table class="table table-hover" id="heightTable">
        <thead>
            <tr>
                <th class="fw-bold">No</th>
                <th class="fw-bold">Height</th>
            </tr>
        </thead>
        <tbody>
            @foreach($heights as $indexhe => $itemhe)
                <tr>
                    <td>{{ $indexhe + 1 }}</td>
                    <td>{{ $itemhe->nama }}"</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
</div>
