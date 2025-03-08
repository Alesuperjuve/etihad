<div class="table-responsive">
                <table class="table table-sm table-hover" id="pegawaiTable">
                    <thead class="table-primary">
                        <tr>
                            <th class="fw-bold">NO</th>
                            <th class="fw-bold">NAME</th>
                            <th class="fw-bold">PAGES</th>
                            <th class="fw-bold">AUTHOR</th>
                            <th class="fw-bold">DATE</th>
                            <th class="fw-bold">DOCUMENT CODE</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($airport as $index => $airpoz)
                            <tr>
                                <td><p class="text-sm">{{ $index + 1 }}</p></td>
                                <td><p class="text-sm">
                                <a href="#" class="link-primary"
                                    onclick="showDetailModal({{ json_encode($airpoz->CONTENT) }}, '{{ $airpoz->NAME }}')">
                                    {{ $airpoz->NAME }}
                                    </a>
                                </p></td>
                                <td><p class="text-sm">{{ $airpoz->PAGE }}</p></td>
                                <td><p class="text-sm">{{ $airpoz->AUTHOR }}</p></td>
                                <td><p class="text-sm">{{ formatTanggal($airpoz->DATE) }}</p></td>
                                
                                <td><p class="text-sm">{{ $airpoz->CODE }}</p></td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="7" class="text-center">No results</p></td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
                <div id="paginationControls" class="mt-3 d-flex justify-content-center"></div>
            </div>