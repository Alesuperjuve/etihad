<div class="table-responsive">
    <table class="table table-hover" id="scaleTable">
        <thead>
            <tr>
                <th class="fw-bold">No</th>
                <th class="fw-bold">Scale</th>
            </tr>
        </thead>
        <tbody>
            @foreach($scales as $indexscale => $itemsca)
                <tr>
                    <td>{{ $indexscale + 1 }}</td>
                    <td>{{ $itemsca->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
</div>
