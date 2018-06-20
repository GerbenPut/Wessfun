<header class="main-right-header">
    <p>Advertisements</p>
</header>
@foreach($images as $image)
    @foreach ($image->advertisements as $advertisement)
        {{--<h2>{{$advertisement->Company}}</h2>--}}
        <img class="advertisement-url" src="{{$advertisement->URL}}">
    @endforeach
@endforeach