<div class="table-responsive">
    <table class="table table-hover" id="titleTable">
        <thead>
            <tr>
                <th class="fw-bold">No</th>
                <th class="fw-bold">Title</th>
            </tr>
        </thead>
        <tbody>
            @foreach($titles as $indextitle => $itemtitle)
                <tr>
                    <td>{{ $indextitle + 1 }}</td>
                    <td>{{ $itemtitle->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
</div>
