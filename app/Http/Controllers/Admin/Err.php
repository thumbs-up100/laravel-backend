<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Err extends Controller
{
    //
    public function err50x()
    {
        return view('admin.err.500');
    }

    public function err404()
    {
        return view('admin.err.404');
    }
}
