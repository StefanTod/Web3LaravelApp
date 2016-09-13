<?php

namespace App\Http\Controllers;

use App\Gpu;
use App\Http\Controllers\Controller;
use DB;

class GpuController extends Controller
{
  /*  public function showGpus()
    {
        $gpus = DB::table('gpus')->get();
        return view('gpus', ['gpus' => $gpus]);
    }*/
    public function gpuByName($name){
        $gpus = DB::table('gpus')
            -> where('name', $name)
            ->first();
    }
    public function showLessGpus()
    {
        $gpus = DB::table('gpus')->select('name', 'price', 'release_date')->get();
        return view('gpus', ['gpus' => $gpus]);
    }
}
