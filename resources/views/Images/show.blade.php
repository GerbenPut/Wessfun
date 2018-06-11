@foreach ($images as $image)
    @foreach ($image->categories as $category)
        <p>{{$category->category}}</p>
    @endforeach
@endforeach