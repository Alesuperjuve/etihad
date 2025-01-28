

<div class="table-responsive">
    <input type="text" id="fontSearch" class="form-control mb-3" placeholder="Search Fonts...">
    <table class="table table-hover" id="fontTable">
        <thead>
            <tr>
                <th class="fw-bold">No</th>
                <th class="fw-bold">Nama Font</th>
            </tr>
        </thead>
        <tbody>
            @foreach($fonts as $indexfo => $font)
                <tr>
                    <td>{{ $indexfo + 1 }}</td>
                    <td>{{ $font->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
</div>
