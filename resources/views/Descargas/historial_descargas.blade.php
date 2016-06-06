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
                        <div class="row">
                            <div class="col-md-6">
                                <a v-show="descarga.downloaded == 0" href="/@{{ descarga.hash }}/1" type="button"
                                   class="btn btn-default">Descargar</a>
                                <h3 v-show="descarga.downloaded == 1"><span class="label label-info">Descargando</span></h3>
                                <h3 v-show="descarga.downloaded == 2"><span class="label label-warning">Cancelado</span></h3>
                            </div>
                            <div class="col-md-6">
                                <a v-show="descarga.downloaded == 1" href="/@{{ descarga.hash }}/2" type="button"
                                   class="btn btn-danger">Cancelar Descarga</a>
                                <a v-show="descarga.downloaded == 2" href="/@{{ descarga.hash }}/3" type="button"
                                   class="btn btn-danger">Quitar de la lista</a>
                            </div>
                        </div>
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