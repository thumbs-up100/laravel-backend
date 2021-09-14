<?php
/**
 * @author  Eddy <cumtsjh@163.com>
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\Admin\LogRepository;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\View\View;

class LogController extends Controller
{
    protected $formNames = ['user_name', 'url'];

    public function __construct()
    {
        parent::__construct();
//        Paginator::defaultView('vendor.pagination.simple-bootstrap-4');
        $this->breadcrumb[] = ['title' => '日志列表', 'url' => route('admin::log.index')];
    }

    /**
     * 日志管理-日志列表
     *
     */
    public function index(Request $request)
    {
        $perPage = (int)$request->get('limit', env('APP_PAGE'));
        $this->formNames[] = 'created_at';
        $condition = $request->only($this->formNames);

        $data = LogRepository::list($perPage, $condition);
        $this->breadcrumb[] = ['title' => '日志列表', 'url' => ''];
        if(empty($data))
            return '';
        return view('admin.log.index', [
//          'breadcrumb' => $this->breadcrumb,
            'lists' => $data,  //列表数据
        ]);
    }

    /**
     * 编辑日志
     *
     * @param int $id
     * @return View
     */
    public function edit($id)
    {
        $this->breadcrumb[] = ['title' => '编辑日志', 'url' => ''];

        $model = LogRepository::find($id);
        return view('admin.log.add', ['id' => $id, 'model' => $model, 'breadcrumb' => $this->breadcrumb]);
    }
}
