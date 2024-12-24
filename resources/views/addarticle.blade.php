@extends('layouts.main')

@section('container')
    <div class="container" style="margin-top: 10px; width: 50%">
        @if ($data != null)
        <form action="{{ route('article.update', $data->id ) }}" method="POST" enctype="multipart/form-data">
    @else
        <form action="{{ route('article.store') }}" method="POST" enctype="multipart/form-data">
    @endif
            @csrf
            <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control @error('judul') is-invalid @enderror" id="judul" name="judul"
                    placeholder="Judul Artikel" value="{{$data != null ? $data->judul : old('judul') }}">
                @error('judul')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <p>Belum memiliki kategori?<a href="{{ route('kategori.create') }}"><i> Buat kategori di sini</i></a></p>
                <select class="form-select" aria-label="kategori" name="kategori">
                    <option {{ $data != null ? '' : 'selected' }} disabled>Pilih Kategori</option>
                    @foreach ($kategori as $category)
                        <option value="{{ $category->id }}"
                            {{ $data != null && $data->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->judul_kategori }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="body" class="form-label">Deskripsi</label>
                <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi" id="body" rows="3">{{$data != null ? $data->body : old('deskripsi') }}</textarea>
                @error('deskripsi')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <div class="mb-3">
                <label for="formFile" class="form-label">Choose Photo</label>
                <input class="form-control @error('gambar') is-invalid @enderror" name="gambar" type="file"
                    id="formFile">
                @error('gambar')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>


            <button type="submit" class="btn btn-primary w-100">Submit</button>
        </form>
    </div>
@endsection
