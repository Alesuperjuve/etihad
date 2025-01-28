<div class="table-responsive">
    <table class="table table-hover" id="bodyTable">
        <thead>
            <tr>
                <th class="fw-bold">No</th>
                <th class="fw-bold">Body</th>
            </tr>
        </thead>
        <tbody>
            @foreach($bodys as $indexbody => $itembody)
                <tr>
                    <td>{{ $indexbody + 1 }}</td>
                    <td>{{ $itembody->nama }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
</div>
