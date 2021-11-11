<?php  


namespace App\Repositories;

use App\Models\kop_profil;

class Pemeringkatan {

    public function getAll () {
        $pemeringkatan = kop_profil::all();
        return $pemeringkatan;
    }
}