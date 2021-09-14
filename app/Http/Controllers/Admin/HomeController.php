<?php
/**
 * Date: 2019/2/25 Time: 14:35
 *
 * @author  Eddy <cumtsjh@163.com>
 * @version v1.0.0
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repository\Admin\EntityRepository;
use App\Repository\Admin\MenuRepository;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    public function __construct()
    {
        if (request()->ajax()) {
            return;
        }

        // 面包屑导航
        $this->breadcrumb[] = ['title' => '首页', 'url' => route('admin::index')];
        View::share('breadcrumb', $this->breadcrumb);

        // 菜单
        $route = request()->route();
        if (is_null($route)) {
            return;
        }
        $route = request()->route()->getName();
        // 获取当前的分组
        $group = MenuRepository::getGroup($route);
        View::share(['light_cur_route' => $route, 'light_cur_group' => $group]);
        if (is_null($currentRootMenu = MenuRepository::root($route))) {
            View::share('light_menu', []);
        } else {
            View::share('light_menu', $currentRootMenu);
            if ($route !== 'admin::aggregation' && $currentRootMenu['route'] === 'admin::aggregation') {
                View::share('autoMenu', EntityRepository::systemMenu());
            }
        }

        $this->formNames = array_merge($this->formNames, ['created_at']);
    }

    /**
     * 基础功能-首页
     */
    public function showIndex()
    {
        return view('admin.home.index');
    }

    /**
     * 内容管理-内容管理
     */
    public function showAggregation()
    {
        return view('admin.home.content');
    }

    public function menus()
    {
        return view('admin.menus');
    }
    public function top()
    {
        return view('admin.top');
    }

    public function main()
    {
        return view('admin.main');
    }

    public function footer()
    {
        return view('admin.footer');
    }
}
