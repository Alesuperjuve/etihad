<div class="table-responsive">
    <input type="text" id="partnumberSearch" class="form-control mb-3" placeholder="Search Part Numbers...">

    <table class="table table-hover" id="partnumberTable">
        <thead>
            <tr>
                <th class="fw-bold">No</th>
                <th class="fw-bold">Part Number</th>
            </tr>
        </thead>
        <tbody>
            @foreach($partnumbers as $indexpart => $itempart)
                <tr>
                    <td>{{ $indexpart + 1 }}</td>
                    <td>{{ $itempart->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
</div>
