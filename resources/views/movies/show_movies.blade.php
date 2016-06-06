<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
    <!-- Sweetalert2 -->
    <link href="{{ asset('/plugins/sweetalert2/dist/sweetalert2.min.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>

    <div class="container">
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
                            <a class="btn btn-danger" href="http://youtube.com/watch?v={{ $movie->yt_trailer_code }}" target="_blank"><i class="fa fa-youtube"></i></a>
                            <div class="btn-group pull-right">
                                <button type="button" class="btn btn-warning dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fa fa-star"></i> <span class="caret"></span>
                                </button>
                                <ul class="dropdown-menu">

                                    @for ($i = 1; $i < 11; $i++)
                                        <li><a href="{{ url('movies/rate/'.$movie->id.'/'. $i ) }}">{{ $i }}</a></li>
                                    @endfor

                                </ul>
                            </div>



                            <div class="Movie--rating">

                                @if (!count($movie->ratings))
                                    <a href="{{ url('movies/rate/'.$movie->id.'/8') }}"><i style="color:yellow" class="fa fa-star"></i></a>
                                @endif
                            </div>
                          </div>
                        </div>
                    </div>
                @endforeach

        </div>
    </div>

    <!-- jQuery 2.1.4 -->
    <script src="{{ asset('/plugins/jQuery/jQuery-2.1.4.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    <!-- SweetAlert 2 -->
    <script src="{{ asset('/plugins/sweetalert2/dist/sweetalert2.min.js') }}"></script>
    @include('layouts.partials.flash')

</body>
</html>
