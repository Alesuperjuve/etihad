<div class="table-responsive">
    <table class="table table-hover" id="sizeTable">
        <thead>
            <tr>
                <th class="fw-bold">No</th>
                <th class="fw-bold">Size</th>
            </tr>
        </thead>
        <tbody>
            @foreach($sizes as $indexsize => $itemsize)
                <tr>
                    <td>{{ $indexsize + 1 }}</td>
                    <td>{{ $itemsize->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
</div>
