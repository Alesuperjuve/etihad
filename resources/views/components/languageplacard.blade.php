<div class="table-responsive">
    <table class="table table-hover" id="languageTable">
        <thead>
            <tr>
                <th class="fw-bold">No</th>
                <th class="fw-bold">Language</th>
            </tr>
        </thead>
        <tbody>
            @foreach($languages as $indexlang => $itemlang)
                <tr>
                    <td>{{ $indexlang + 1 }}</td>
                    <td>{{ $itemlang->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
</div>
