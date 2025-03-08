@extends('layouts.app')

@section('content')

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
        

        <!-- div untuk setiap konten dropdown dan disembunyikan -->
        <div class="dropdown-content" id="content-Font" style="display:none;">
            @include('components.fontplacard')
        </div>
        <div class="dropdown-content" id="content-Material" style="display:none;">
            @include('components.materialplacard ')
        </div>
        <div class="dropdown-content" id="content-Artwork" style="display:none;">
            @include('components.artworkplacard')
        </div>
        <div class="dropdown-content" id="content-Background" style="display:none;">
            @include('components.backgroundplacard')
        </div>

        <div class="dropdown-content" id="content-Body" style="display:none;">
            @include('components.bodyplacard')
        </div>

        <div class="dropdown-content" id="content-Desc" style="display:none;">
            @include('components.descplacard')
        </div>

        <div class="dropdown-content" id="content-Height" style="display:none;">
            @include('components.heightplacard')
        </div>

        <div class="dropdown-content" id="content-Language" style="display:none;">
            @include('components.languageplacard')
        </div>

        <div class="dropdown-content" id="content-Radius" style="display:none;">
            @include('components.radiusplacard')
        </div>

        <div class="dropdown-content" id="content-Scale" style="display:none;">
            @include('components.scaleplacard')
        </div>

        <div class="dropdown-content" id="content-Size" style="display:none;">
            @include('components.sizeplacard')
        </div>

        <div class="dropdown-content" id="content-Title" style="display:none;">
            @include('components.titleplacard')
        </div>

        <div class="dropdown-content" id="content-Tolerance" style="display:none;">
            @include('components.toleranceplacard')
        </div>

        <div class="dropdown-content" id="content-Zone" style="display:none;">
            @include('components.zoneplacard')
        </div>

    </div>
</div>









@endsection

@section('scripts')

<script src="{{ asset('build/js-dubai/dropdown-placard.js') }}"></script>

<script>
    window.placardDropdownData = @json($dropdownplacard);
</script>
@endsection
