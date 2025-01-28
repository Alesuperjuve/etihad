<div class="table-responsive">
    <table class="table table-hover" id="artworkTable">
        <thead>
            <tr>
                <th class="fw-bold">No</th>
                <th class="fw-bold">Artwork</th>
            </tr>
        </thead>
        <tbody>
            @foreach($artworks as $indexartwork => $itemart)
                <tr>
                    <td>{{ $indexartwork + 1 }}</td>
                    <td>{{ $itemart->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
</div>
