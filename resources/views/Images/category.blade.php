<header class="main-left-category-header">
    <p>Categories</p>
</header>
@foreach ($categories as $category)
    @if($category->category=='NSFW (18+)')
        <p class="category2">
            <a href="{{ route('categories.show', $category) }}">{{$category->category}}</a>
            <br>
        </p>
    @else
        <p class="category">
            <a href="{{ route('categories.show', $category) }}">{{$category->category}}</a>
            <br>
        </p>
    @endif
@endforeach
