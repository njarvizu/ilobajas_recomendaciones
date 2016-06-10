@extends('layouts.app')


<!-- Recomendacion Grid Section -->
<section id="portfolio" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Historial de descargas</h2>
            </div>
        </div>
        <div class="row">
          <div class="col-md-1 col-sm-5 portfolio-item">
          </div>
          @foreach ($datos as $dato)
            <div class="col-md-3 col-sm-5 portfolio-item">


                <div class="portfolio-caption">
                    <h4 >{{$dato->title}}</h4>
                    <br>
                    <p class="text-muted"> {{$dato->state }}</p>

                </div>
            </div>
              @endforeach
          </section>
