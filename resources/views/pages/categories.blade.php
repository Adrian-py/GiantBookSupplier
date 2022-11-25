@extends("layout")

@section("content")
    <h1 class="page-title">Book Categories</h1>

    <ul class="categories">
        @foreach ($categories_list as $category)
            <li  class="categories__category"><a href="/category/{{ $category->name }}">{{$category->name}}</a></li>
        @endforeach
    </ul>
@endsection
