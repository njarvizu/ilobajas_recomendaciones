@extends('layouts.app')


@section ('content')

<!-- Recomendacion Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Recomendaciones</h2>
                <h3 class="section-subheading text-muted">Peliculas seleccionadas especialmente para ti.</h3>
            </div>
        </div>
        <div class="row">
          <div class="col-md-1 col-sm-5 portfolio-item">
          </div>
          @foreach ($peliculas as $pelicula)
            <div class="col-md-3 col-sm-5 portfolio-item">
                <a href="#portfolioModal" class="portfolio-link modal-click" data-id="{{ $pelicula->id}}" data-toggle="modal">
                    <div class="portfolio-hover">
                        <div class="portfolio-hover-content">
                            <i class="glyphicon glyphicon-eye-open fa-3x"></i>
                        </div>
                    </div>
                    <img src="{{ $pelicula->image }}" class="img-responsive img-centered modal-click" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4 class="modal-click">{{ $pelicula->title }}</h4>
                    <br>
                    <p class="text-muted modal-click">  </p>
                    <button type="button" class="btn btn-primary modal-click" id="{{ $pelicula->urlhash_calidad_baja}}"><i class="glyphicon glyphicon-circle-arrow-down"></i> Descarga {{ $pelicula->calidad_alta }}</button>
                      <br><br>
                    <button type="button" class="btn btn-primary modal-click" id="{{ $pelicula->urlhash_calidad_baja}}"><i class="glyphicon glyphicon-circle-arrow-down"></i> Descarga {{ $pelicula->calidad_baja }}</button>
                </div>
            </div>
              @endforeach
          </section>



                      <!-- Recomendaciones Modals -->

                      <div class="portfolio-modal modal fade" id="portfolioModal" tabindex="-1" role="dialog" aria-hidden="true">
                          <div class="modal-content">
                              <div class="close-modal" data-dismiss="modal">
                                  <div class="lr">
                                      <div class="rl">
                                      </div>
                                  </div>
                              </div>
                              <div class="container">
                                  <div class="row">
                                      <div class="col-lg-8 col-lg-offset-2">
                                          <div class="modal-body">
                                              <!-- Project Details Go Here -->
                                              <h2 class="modal-titulo">{{$pelicula->title}}</h2>
                                              <p class="item-intro text-muted"></p>
                                              <img src="{{ $pelicula->image }}" class="img-centered img-medium" alt="">
                                              <p>{{ $pelicula->descripcion}}</p>
                                              <ul class="list-inline">
                                                  <li>Calidad:{{$pelicula->calidad_baja}} | {{$pelicula->calidad_alta}}</li>
                                              </ul>
                                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="glyphicon glyphicon-circle-arrow-left"></i> volver</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

@stop
