<?php

namespace App\Http\Controllers;

use App\Repository\Admin\EntityRepository;
use App\Repository\Admin\MenuRepository;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $breadcrumb = [];

    protected $formNames = [];

    public function __construct()
    {
        if (request()->ajax()) {
            $this->initialize();
            return;
        }
    }

    /**
     * 初始化表单
     */
    public function initialize()
    {
        $request = app('request');
        $request->merge(
            [
                'languages' => $request->input('languages', [0]),
                'channels' => $request->input('channels', [0]),
                'appLanguages' => $request->input('appLanguages', [0]),
            ]
        );
    }
}
