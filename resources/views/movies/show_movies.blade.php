@extends('layouts.app')

@section ('content')
    <div class="row">
        <h3>Calificar películas</h3>

        @foreach($movies as $movie)
            <div class="col-md-3">
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
                                    <i class="fa fa-star"></i> <span class="caret"></span>
                                </button>

                                <ul class="dropdown-menu">

                                    @for ($i = 1; $i < 11; $i++)
                                        <li><a href="{{ url('movies/rate/'.$movie->id.'/'. $i ) }}">{{ $i }}</a></li>
                                    @endfor

                                </ul>
                            </div>
                        @else
                            <a href="#" class="btn btn-warning pull-right">
                                {{ $movie->ratings[0]->rating }} <i class="fa fa-star"></i>
                            </a>
                            {{--<span style="background-color:#f0ad4e;" class="badge pull-right">{{ $movie->ratings[0]->rating }} <i class="fa fa-star"></i></span>--}}
                        @endif



                        {{--<div class="Movie--rating">--}}
                    <!-- Check if movie ratings -->
                        @if (!count($movie->ratings))
                            {{--                                    <a href="{{ url('movies/rate/'.$movie->id.'/8') }}"><i style="color:yellow" class="fa fa-star"></i></a>--}}
                        @endif
                        {{--</div>--}}
                    </div>
                </div>
            </div>
        @endforeach

    </div>
@stop