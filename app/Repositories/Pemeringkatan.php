<?php  


namespace App\Repositories;

use App\Models\kop_profil;
use App\Models\v_pemeringkatan;
use Illuminate\Support\Facades\DB;

class Pemeringkatan {

    public function getAll () {
        // $pemeringkatan = v_pemeringkatan::all();
        $pemeringkatan =DB::table('v_nilai_pemeringkatan')->paginate(10);
        return $pemeringkatan;
    }
}