@extends("layout")

@section("content")
    <h1 class="page-title">{{ $page_title }}</h1>

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
