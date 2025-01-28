<div class="table-responsive">
    <table class="table table-hover" id="radiusTable">
        <thead>
            <tr>
                <th class="fw-bold">No</th>
                <th class="fw-bold">Radius</th>
            </tr>
        </thead>
        <tbody>
            @foreach($radiuss as $indexrad => $itemrad)
                <tr>
                    <td>{{ $indexrad + 1 }}</td>
                    <td>{{ $itemrad->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
</div>
