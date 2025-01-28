<div class="card">
    <div class="card-body">
        <h4 class="card-title">Data Placard</h4>
        <div class="row">
            <div class="col-8"></div>
            <div class="col-4">
                <div class="input-group-prepend">
                    
                    <button class="btn btn-md btn-outline-primary dropdown-toggle" 
                            type="button" 
                            data-bs-toggle="dropdown" 
                            aria-haspopup="true" 
                            aria-expanded="false">Detail Placard</button>
                    <div class="dropdown-menu">
                        @foreach($dropdownplacard as $itemdd)
                            <a class="dropdown-item" href="#" data-content="{{ $itemdd['konten'] }}">
                                {{ $itemdd['nama'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <!-- Konten dinamis akan ditampilkan di sini -->
        <!-- <div id="konten-dinamais" class="mt-3"></div> -->

        <!-- div untuk setiap konten dropdown dan disembunyikan -->
        <div class="dropdown-content" id="content-Font" style="display:none;">
            <x-fontplacard />
        </div>
        <div class="dropdown-content" id="content-Material" style="display:none;">
            <x-materialplacard />
        </div>
        <div class="dropdown-content" id="content-Artwork" style="display:none;">
            <x-artworkplacard />
        </div>
        <div class="dropdown-content" id="content-Background" style="display:none;">
            <x-backgroundplacard />
        </div>

        <div class="dropdown-content" id="content-Body" style="display:none;">
            <x-bodyplacard />
        </div>

        <div class="dropdown-content" id="content-Desc" style="display:none;">
            <x-descplacard />
        </div>

        <div class="dropdown-content" id="content-Height" style="display:none;">
            <x-heightplacard />
        </div>

        <div class="dropdown-content" id="content-Language" style="display:none;">
            <x-languageplacard />
        </div>

        <div class="dropdown-content" id="content-Radius" style="display:none;">
            <x-radiusplacard />
        </div>

        <div class="dropdown-content" id="content-Scale" style="display:none;">
            <x-scaleplacard />
        </div>

        <div class="dropdown-content" id="content-Size" style="display:none;">
            <x-sizeplacard />
        </div>

        <div class="dropdown-content" id="content-Title" style="display:none;">
            <x-titleplacard />
        </div>

        <div class="dropdown-content" id="content-Tolerance" style="display:none;">
            <x-toleranceplacard />
        </div>

        <div class="dropdown-content" id="content-Zone" style="display:none;">
            <x-zoneplacard />
        </div>

    </div>
</div>





<script>
    window.placardDropdownData = @json($dropdownplacard);
</script>
