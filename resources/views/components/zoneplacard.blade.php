<div class="table-responsive">
    <table class="table table-hover" id="zoneTable">
        <thead>
            <tr>
                <th class="fw-bold">No</th>
                <th class="fw-bold">Zone</th>
            </tr>
        </thead>
        <tbody>
            @foreach($zones as $indexzone => $itemzo)
                <tr>
                    <td>{{ $indexzone + 1 }}</td>
                    <td>{{ $itemzo->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
</div>
