<?php
/**
 * Date: 2019/2/25 Time: 14:49
 *
 * @author  Eddy <cumtsjh@163.com>
 * @version v1.0.0
 */

namespace App\Http\Controllers\Admin;

use App\Exceptions\ApiException;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminUserRequest;
use App\Models\Admin\AdminUser;
use App\Repository\Admin\AdminUserRepository;
use App\Repository\Admin\RoleRepository;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Admin\AdminUser as AdminUserModel;

class AdminUserController extends Controller
{
    protected $formNames = ['name', 'password', 'status'];

    public function __construct()
    {
        // parent::__construct();

        $this->breadcrumb[] = ['title' => '管理员管理', 'url' => route('admin::adminUser.index')];
    }

    /**
     * 管理员管理-管理员列表
     *
     */
    public function index(Request $request)
    {
        $perPage = (int)$request->get('limit', env('APP_PAGE'));
        $this->formNames[] = 'created_at';
        $condition = $request->only($this->formNames);
        $data = AdminUserRepository::list($perPage, $condition);
        $this->breadcrumb[] = ['title' => '管理员列表', 'url' => ''];
        if(empty($data))
            return '';
        return view('admin.adminUser.index', [
//          'breadcrumb' => $this->breadcrumb,
            'lists' => $data,  //列表数据
        ]);
    }

    /**
     * 管理员管理-新增管理员
     *
     */
    public function create()
    {
        $this->breadcrumb[] = ['title' => '新增管理员', 'url' => ''];
        return view('admin.adminUser.add', ['breadcrumb' => $this->breadcrumb]);
    }

    /**
     * 管理员管理-保存管理员
     *
     * @param AdminUserRequest $request
     * @return array
     */
    public function save(AdminUserRequest $request)
    {
        try {
            $user = AdminUserRepository::add($request->only($this->formNames));
            AdminUserRepository::setDefaultPermission($user);
            return [
                'code' => 0,
                'msg' => trans('general.createSuccess'),
                'redirect' => true
            ];
        } catch (QueryException $e) {
            return [
                'code' => 1,
                'msg' => trans('general.createFailed') . ":" . (Str::contains($e->getMessage(), 'Duplicate entry') ? '当前用户已存在' : '其它错误'),
                'redirect' => false
            ];
        }
    }

    /**
     * 管理员管理-编辑管理员
     *
     * @param int $id
     */
    public function edit($id)
    {
        $this->breadcrumb[] = ['title' => '编辑管理员', 'url' => ''];

        $user = AdminUserRepository::find($id);
        return view('admin.adminUser.add', ['id' => $id, 'user' => $user, 'breadcrumb' => $this->breadcrumb]);
    }

    /**
     * 管理员管理-更新管理员
     *
     * @param AdminUserRequest $request
     * @param int $id
     * @return array
     */
    public function update(AdminUserRequest $request, $id)
    {
        $data = $request->only($this->formNames);
        if (!isset($data['status'])) {
            $data['status'] = AdminUser::STATUS_DISABLE;
        }
        if ($request->input('password') == '') {
            unset($data['password']);
        }

        try {
            AdminUserRepository::update($id, $data);
            return [
                'code' => 0,
                'msg' => trans('general.updateSuccess'),
                'redirect' => true
            ];
        } catch (QueryException $e) {
            return [
                'code' => 1,
                'msg' => trans('general.updateFailed') . ":" . (Str::contains($e->getMessage(), 'Duplicate entry') ? '当前用户已存在' : '其它错误'),
                'redirect' => false
            ];
        }
    }

    /**
     * 管理员管理-分配角色
     *
     * @param $id
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function role($id)
    {
        $this->breadcrumb[] = ['title' => '分配角色', 'url' => ''];

        $roles = RoleRepository::all();
        $userRoles = AdminUserRepository::find($id)->getRoleNames();
        return view('admin.adminUser.role', [
            'id' => $id,
            'roles' => $roles,
            'breadcrumb' => $this->breadcrumb,
            'userRoles' => $userRoles,
        ]);
    }

    /**
     * 管理员管理-更新用户角色
     *
     * @param Request $request
     * @param $id
     * @return array
     */
    public function updateRole(Request $request, $id)
    {
        try {
            $user = AdminUserRepository::find($id);
            $user->syncRoles(array_values($request->input('role')));
            return [
                'code' => 0,
                'msg' => trans('general.updateSuccess'),
                'redirect' => true
            ];
        } catch (\Throwable $e) {
            return [
                'code' => 1,
                'msg' => trans('general.updateFailed'),
            ];
        }
    }

    /**
     * 管理员管理-删除管理员
     *
     * @param int $id
     * @return array
     */
    public function delete($id)
    {
        try {
//            $user = AdminUserRepository::find($id);
//            $userRoles = AdminUserRepository::roles($user);
//            $user->removeRole($userRoles);
            AdminUserRepository::delete($id);
            return [
                'code' => 0,
                'msg' => trans('general.deleteSuccess'),
                'redirect' => true
            ];
        } catch (\RuntimeException $e) {
            return [
                'code' => 1,
                'msg' => trans('general.deleteFailed') . ":" . $e->getMessage(),
                'redirect' => false
            ];
        }
    }
}
