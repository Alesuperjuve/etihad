<div class="table-responsive">
    <table class="table table-hover" id="descTable">
        <thead>
            <tr>
                <th class="fw-bold">No</th>
                <th class="fw-bold">Desc</th>
            </tr>
        </thead>
        <tbody>
            @foreach($descs as $indexdesc => $itemdesc)
                <tr>
                    <td>{{ $indexdesc + 1 }}</td>
                    <td>{{ $itemdesc->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
</div>
