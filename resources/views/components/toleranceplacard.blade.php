<div class="table-responsive">
    <table class="table table-hover" id="toleranceTable">
        <thead>
            <tr>
                <th class="fw-bold">No</th>
                <th class="fw-bold">Tolerance</th>
            </tr>
        </thead>
        <tbody>
            @foreach($tolerances as $indextoler => $itemtoler)
                <tr>
                    <td>{{ $indextoler + 1 }}</td>
                    <td>{{ $itemtoler->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
</div>
