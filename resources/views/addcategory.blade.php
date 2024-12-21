@extends('layouts.main')

@section('container')
    <div class="container" style="margin-top: 10px; width: 50%">
        <h2>Buat Kategori Baru</h2>
        <form action="{{ route('kategori.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul Kategori</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="kategori" name="kategori"
                    placeholder="Judul Kategori" value="{{ old('judul') }}">
                @error('kategori')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
@endsection
