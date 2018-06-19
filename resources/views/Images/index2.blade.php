<head>
    <link href="{{asset('scss/style.scss')}}" rel="stylesheet">
</head>

@foreach ($images->reverse()  as $image)
    @if($image->category_id=='3')

    @else
        <body id="top-image">
        <div id="content"></div>
        <div class="articlemargin">
            <article class="main-article">
                <header class="main-images-header">
                    {{--Hier komt de titel en description van de media--}}

                    <a class="imagelink" href="http://127.0.0.1:8000/images/{{$image->id}}">
                        <td>{{$image->title}}</td>
                    </a>
                </header>

                <div class="main-image">
                    {{--Hier komt de Gif/Image/video--}}
                    {{--<img src="{{$image->url}}" style="height: 50%; width: auto">--}}

                    @if($image->sort=='Video')
                        <video class="postimage" controls>
                            <source src="{{$image->url}}" type="video/mp4">
                            <source src="{{$image->url}}" type="video/ogg">
                        </video>
                    @else
                        <a class="imagelink" href="http://127.0.0.1:8000/images/{{$image->id}}"> <img class="postimage" src="{{$image->url}}">
                        </a>
                    @endif

                </div>

                <footer class="main-images-footer">
                    {{--Hier komt het voten per media--}}
                </footer>
            </article>
            @role('Admin', 'web')
            <td><a href="{{URL::to('images/'.$image->id.'/edit')}}">
                    <button class="editbtn" type="submit">Edit</button>
                </a></td>
            <td>{{ Form::open(array('url' => 'images/'.$image->id)) }}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', array('class' => 'deletebtn')) }}
                {{ Form::close() }}
            </td>
            @endrole
        </div>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>


        <script>
            $(document).ready(function() {
                var movementStrength = 25;
                var height = movementStrength / $(window).height();
                var width = movementStrength / $(window).width();
                $("#top-image").mousemove(function(e){
                    var pageX = e.pageX - ($(window).width() / 2);
                    var pageY = e.pageY - ($(window).height() / 2);
                    var newvalueX = width * pageX * -1 - 25;
                    var newvalueY = height * pageY * -1 - 50;
                    $('#top-image').css("background-position", newvalueX+"px     "+newvalueY+"px");
                });
            });
        </script>

        <style>
            body {
                background-image: url("https://i.pinimg.com/originals/51/d6/81/51d6817f464288f5be2f5fe29c6ffb54.jpg");
            }
        </style>

        <script>
            var $win = $(window),
                w = 0, h = 0,
                rgb = [],
                getWidth = function () {
                    w = $win.width();
                    h = $win.height();
                };

            $win.resize(getWidth).mousemove(function (e) {

                rgb = [
                    Math.round(e.pageX / w * 255),
                    Math.round(e.pageY / h * 255),
                    150
                ];

                $('#content').css('background', 'rgb(' + rgb.join(',') + ')');

            }).resize();
        </script>
        <style>
            #content {
                height: 100%;
                background: -webkit-linear-gradient(270deg, #4ac1ff, #795bb0);
                background: linear-gradient(180deg, #4ac1ff, #795bb0);
                position: fixed;
                width: 100%;
                opacity: 0.1;
            }
        </style>
        </body>
    @endif
@endforeach