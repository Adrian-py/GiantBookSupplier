@extends("layout")

@section("content")
    <div class="info-card info-card--publisher">
        <img src="/assets/{{ $publisher->image }}" alt="{{ $page_title }} Logo" class="publisher__logo">
        <h1 class="publisher__title">{{ $page_title }}</h1>
        <p class="publisher__address">Address: {{ $publisher->address }}</p>
        <p class="publisher__phone">Phone: {{ $publisher->phone }}</p>
        <p class="publisher__email">Email: {{ $publisher->email }}</p>
    </div>

    <h2 class="list-title">Books by {{ $publisher->name }}</h2>
    <div class="books-list">
        @foreach ($books_list as $book)
        <div class="books-list__book">
            <img src="/assets/{{ $book->image }}" alt="{{ $book->title }} cover" class="book__cover">
            <div class="book__desc">
                <a href="/book/{{ $book->slug }}" class="book__title">{{$book->title}}</a>
                <p class="book__author">by<br>{{$book->author}}</p>
                <a href="/book/{{ $book->slug }}" class="book__link">Detail</a>
            </div>
        </div>
        @endforeach
    </div>
@endsection
