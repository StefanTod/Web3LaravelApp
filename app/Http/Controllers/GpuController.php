<?php

namespace App\Http\Controllers;

use App\Gpu;
use App\Http\Controllers\Controller;
use DB;
use Auth;
class GpuController extends Controller
{
  /*  public function showGpus()
    {
        $gpus = DB::table('gpus')->get();
        return view('gpus', ['gpus' => $gpus]);
    }*/
    public function gpuByName($id){
        $gpu = Gpu::find($id);
        return view('gpu', array('gpu' => $gpu));
    }
    public function showLessGpus()
    {
        $gpus = DB::table('gpus')->select('id', 'name', 'price', 'type', 'release_date', 'specs', 'reviews')->get();
        return view('gpus', ['gpus' => $gpus]);
    }
    public function Logout(){
        Auth::logout(); // log the user out of our application
        return back();
    }
}
