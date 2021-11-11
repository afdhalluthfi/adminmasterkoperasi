<?php

namespace App\Http\Controllers;

use App\Models\kop_profil;
use App\Repositories\Pemeringkatan;
use Illuminate\Http\Request;

class PemeringkatanController extends Controller
{
    //
    private $ringkatan;
    
    public function __construct(Pemeringkatan $pemeringkatan)
    {
        $this->ringkatan=$pemeringkatan->getAll();
    } 
    public function index () {
        
        $pemeringkatan =$this->ringkatan;
        return view('content.pemeringkatan',compact('pemeringkatan'));
        // return $pemeringkatan;
    }
}
