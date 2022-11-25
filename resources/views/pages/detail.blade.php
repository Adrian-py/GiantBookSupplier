@extends("layout")

@section("content")
    <a href="/" class="back-button">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M15 18L9 12L15 6" stroke="#f1faee" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Go back
    </a>
    <h1 class="page-title">Book Detail</h1>
    <div class="book-detail">
        <img src="/assets/{{ $book->image }}" alt="{{ $book->title }} cover" class="book-detail__cover">

        <div class="book-detail__desc">
            <h2 class="book-detail__title">{{ $book->title }}</h2>
            <p class="book-detail__author">By. {{ $book->author }}</p>
            <p class="book-detail__pubslisher">Published by {{ $book->publishers->name }}</p>
            <p class="book-detail__desc"><span class="book-detail__desc__title">Synopsis</span><br>{{ $book->synopsis }}</p>
        </div>
    </div>
@endsection
