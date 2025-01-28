<div class="table-responsive">
    <input type="text" id="materialSearch" class="form-control mb-3" placeholder="Search Material...">
    <table class="table table-hover" id="materialTable">
        <thead>
            <tr>
                <th class="fw-bold">No</th>
                <th class="fw-bold">Material</th>
            </tr>
        </thead>
        <tbody>
            @foreach($materials as $indexmat => $itemmat)
                <tr>
                    <td>{{ $indexmat + 1 }}</td>
                    <td>{{ $itemmat->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
</div>
