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
                            <i class="fa fa-plus fa-3x"></i>
                        </div>
                    </div>
                    <img src="{{ $pelicula->image }}" class="img-responsive img-centered" alt="">
                </a>
                <div class="portfolio-caption">
                    <h4>{{ $pelicula->title }}</h4>
                    <p class="text-muted"> {{ $pelicula->date }} </p>
                    <button type="button" class="btn btn-primary" id="{{ $pelicula->urlhash_calidad_baja}}"><i class="fa fa-times"></i>Descarga {{ $pelicula->calidad_alta }}</button>
                      <br><br>
                    <button type="button" class="btn btn-primary" id="{{ $pelicula->urlhash_calidad_baja}}"><i class="fa fa-times"></i>Descarga {{ $pelicula->calidad_baja }}</button>
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
                                              <h2 class="modal-titulo"></h2>
                                              <p class="item-intro text-muted">Genero</p>
                                              <img src="{{ $pelicula->image }}" class="img-responsive img-centered" alt="">
                                              <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                              <p>
                                                  <strong>Want these icons in this portfolio item sample?</strong>You can download 60 of them for free, courtesy of <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">RoundIcons.com</a>, or you can purchase the 1500 icon set <a href="https://getdpd.com/cart/hoplink/18076?referrer=bvbo4kax5k8ogc">here</a>.</p>
                                              <ul class="list-inline">
                                                  <li>{{ $pelicula->date}}</li>
                                                  <li>Category: Graphic Design</li>
                                              </ul>
                                              <button type="button" class="btn btn-primary" data-dismiss="modal"><i class="fa fa-times"></i> Close Project</button>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                      </div>

@stop
