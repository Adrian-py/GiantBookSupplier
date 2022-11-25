@extends("layout")

@section("content")
    <h1 class="page-title">{{ $page_title }}</h1>
    <ul class="publishers">
        @foreach ($publishers as $publisher)
            <li class="publishers__publisher"><a href="publisher/{{ $publisher->slug }}" >{{ $publisher->name }}</a></li>
        @endforeach
    </ul>
@endsection


