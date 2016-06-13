@extends('layouts.app')

@section ('content')
<div class="row">
    <h3>Calificar películas</h3>

    @foreach($movies as $movie)
    <div class="col-md-6">
        <div class="panel panel-default">
            <div class="panel-heading">{{ $movie->title }}</div>
            <div class="panel-body">
                <a href="http://imdb.com/title/{{ $movie->imdb_code }}" target="_blank">
                    <img class="img-responsive" src="{{ $movie->medium_cover_image }}">
                </a>

            </div>
            <div class="panel-footer">
                <a class="btn btn-danger" href="http://youtube.com/watch?v={{ $movie->yt_trailer_code }}"
                    target="_blank"><i class="fa fa-youtube"></i></a>

                    @if (!count($movie->ratings))
                    <div class="btn-group pull-right">
                        <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-star"></i> <span class="caret"></span></button>

                        <ul class="dropdown-menu">

                            @for ($i = 1; $i < 11; $i++)
                            <li><a href="{{ url('movies/rate/'.$movie->id.'/'. $i ) }}">{{ $i }}</a></li>
                            @endfor

                        </ul>
                    </div>
                    @else
                    <input id="stars-{{ $movie->id }}" data-id="{{ $movie->id }}" value="{{ $movie->id }}" name="input-name" type="number" class="rating" data-size="xs" data-rtl="true">
                    @endif
                </div>
            </div>
        </div>
        <pre>
            {{ $movie->ratings }}
        </pre>
        @endforeach
    </div>
    @stop
    @section ('script')
    <script type="text/javascript">
    $(".rating").rating(
        {
            min:0, max:10, step: 1, size:'xs',
            starCaptionClasses: function(val) {
                if (val == 0) {
                    return 'label label-default';
                }
                else if (val < 3) {
                    return 'label label-danger';
                }
                else {
                    return 'label label-success';
                }
            }
        }
    );

    $('.rating').on('rating.change', function(event, value, caption) {
        //console.log(value);
        var id = $(this).data('id');
        var url = "/movies/rate/"+id+"/"+value;
        window.location.href=url;
    });
    </script>
    @stop
