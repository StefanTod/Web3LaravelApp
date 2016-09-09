<?php

namespace App\Http\Controllers;

use App\Gpu;

class GpuController extends Controller
{
    public function showGpus()
    {
        return view('gpus');
    }
}
