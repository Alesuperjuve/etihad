<div class="table-responsive">
    <table class="table table-hover" id="placardTable">
        <thead>
            <tr>
                <th class="fw-bold">No</th>
                <th class="fw-bold">Background</th>
            </tr>
        </thead>
        <tbody>
            @foreach($backgrounds as $indexbg => $itembg)
                <tr>
                    <td>{{ $indexbg + 1 }}</td>
                    <td>{{ $itembg->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
</div>
