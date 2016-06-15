<?php
    namespace App\Http\Controllers;

    use App\User;
    use App\Http\Controllers\Controller;
    use App\download_queue;

    class DescargasController extends Controller {
        public function __construct()
        {
            $this->middleware('auth');
        }
        
        public function historial_descargas($id = null, $action = null) {

            if($id != null AND $action == 1) {
                $get_download = download_queue::where('hash', $id)->update(['downloaded' => 1]);
                //$get_download->downloaded = 1;
                //$get_download->save();
                //$get_download->update(['downloaded' => 1]);
            } elseif($id != null AND $action == 2) {
                $get_download = download_queue::where('hash', $id)->update(['downloaded' => 2]);
            } elseif($id != null AND $action == 3) {
                $get_download = download_queue::where('hash', $id)->update(['downloaded' => 3]);
            }

            $download = download_queue::where('downloaded', 0)->orwhere('downloaded', 1)->orwhere('downloaded', 2)->get();

            return view('descargas.historial_descargas', compact('download'));
        }
    }
