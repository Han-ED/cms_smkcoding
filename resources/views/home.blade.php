@extends('layouts.main')
@section('container')
    <div class="container" style="margin-bottom: 10px; margin-top: 10px">
        <h2>New Articles</h2>
        <div class="card">
            <div class="row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">Special title treatment</h5>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-images" style="margin-top: 3rem">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                @foreach ($articles as $article)
                    <div class="col">
                        <div class="card">
                            <img src="{{ asset('storage/'.$article->image) }}" class="card-img-top" alt="..." style="width: 50%; height:50%; align-item: center;">
                            <div class="card-body">
                                <h5 class="card-title">{{$article->judul}}</h5>
                                <p class="card-text">This is a longer card with supporting text below as a natural lead-in
                                    to additional content. This content is a little bit longer.</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endsection
