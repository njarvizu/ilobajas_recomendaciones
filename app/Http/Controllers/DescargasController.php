<?php
    namespace App\Http\Controllers;

    use App\User;
    use App\Http\Controllers\Controller;
    use App\download_queue;

    class DescargasController extends Controller {

        public function historial_descargas($id = null) {

            if($id != null) {
                $get_download = download_queue::where('hash', $id)->update(['downloaded' => 1]);
                //$get_download->downloaded = 1;
                //$get_download->save();
                //$get_download->update(['downloaded' => 1]);
            }

            $download = download_queue::where('downloaded', 0)->orwhere('downloaded', 1)->get();

            return view('descargas.historial_descargas', compact('download'));
        }
    }