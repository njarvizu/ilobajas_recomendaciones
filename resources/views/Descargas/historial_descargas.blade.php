@extends('layouts.default')

@section('htmlheader_title', 'Historial de descargas')

@section('main-content')
    <div class="panel panel-info">
        <div class="panel-heading">
            <h1 class="panel-title">Historial de descargas</h1>
        </div>
        <div class="panel-body" id="download_peliculas">
            <table class="table">
                <thead>
                <tr>
                    <th>Pelicula</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                <tr v-for="descarga in descargas">
                    <td>
                        @{{ descarga.title }}
                    </td>
                    <td>
                        <a v-show="descarga.downloaded == 0" href="@{{ descarga.hash }}" type="button"
                           class="btn btn-default">Descargar</a>
                        <h3 v-show="descarga.downloaded == 1"><span class="label label-success">Descargado</span></h3>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script>
        var descargas = {!! json_encode($download) !!};
        var download_peliculas = new Vue({
            el: '#download_peliculas',
            data: {
                descargas: descargas,
            }
        })
    </script>

@endsection