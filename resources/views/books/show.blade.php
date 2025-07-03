@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Detail Buku</h2>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">{{ $book->title }}</h4>
            <p class="card-text"><strong>Penulis:</strong> {{ $book->author }}</p>
            <p class="card-text"><strong>Penerbit:</strong> {{ $book->publisher }}</p>
            <p class="card-text"><strong>Tahun:</strong> {{ $book->year }}</p>
            <p class="card-text"><strong>Halaman:</strong> {{ $book->pages }}</p>
            <a href="{{ route('books.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('books.edit', $book) }}" class="btn btn-warning">Edit</a>
        </div>
    </div>
</div>
@endsection
