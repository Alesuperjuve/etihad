@extends('layouts.app')
  
@section('content')
<div class="container pb-3">
    <div class="card">
            <div class="card-body">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-3">
                        Tabel International Airport</h2>
                        
                            <x-airport-component />
                        
            </div>
        </div>
</div>

<div class="container">
<div class="card">
        <div class="card-body">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight mb-2">
                {{ __('Upload Berkas PDF - Extract Data Bandara Dunia') }}
            </h2>
            

            @if(session('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <form action="{{ url('tesekstrak/extract') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <label class="text-xs text-danger">Pilih file PDF. Pastikan sesuai standar PDF yang berlaku.</label>
                <div class="input-group">
                    
                    <input type="file" name="pdf_file" class="form-control text-sm" accept="application/pdf" required>
                    <button class="btn btn-primary" type="submit">Extract</button>
                </div>
            </form>

        </div>
    </div>
</div>
    
    
@endsection
