<?php
/**
 * Date: 2019/2/25 Time: 16:15
 *
 * @author  Eddy <cumtsjh@163.com>
 * @version v1.0.0
 */

namespace App\Repository\Admin;

use App\Models\Admin\AdminUser;
use App\Models\Admin\Menu;
use App\Repository\Searchable;
use Illuminate\Support\Facades\DB;

class AdminUserRepository
{
    use Searchable;

    public static function list($perPage, $condition = [])
    {
//        DB::connection()->enableQueryLog();#开启执行日志
        $data = AdminUser::query()
            ->select('id', 'name', 'created_at', 'updated_at', 'status')
            ->where(function ($query) use ($condition) {
                Searchable::buildQuery($query, $condition);
            })
            ->orderBy('id', 'desc')
            ->paginate($perPage);
//        print_r(DB::getQueryLog());   //获取查询语句、参数和执行时间
//        $data->transform(function ($item) {
//            xssFilter($item);
//            $item->editUrl = route('admin::adminUser.edit', ['id' => $item->id]);
//            $item->roleUrl = route('admin::adminUser.role.edit', ['id' => $item->id]);
//            $item->statusText = $item->status == AdminUser::STATUS_ENABLE ?
//                    '<span class="layui-badge layui-bg-green">启用</span>' :
//                    '<span class="layui-badge">禁用</span>';
//            return $item;
//        });
//        return [
//            'code' => 0,
//            'msg' => '',
//            'count' => $data->total(),
//            'data' => $data,
//        ];
        return $data;
    }

    public static function add($data)
    {
        $data['password'] = bcrypt($data['password']);
        return AdminUser::query()->create($data);
    }

    public static function update($id, $data)
    {
        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }
        return AdminUser::query()->where('id', $id)->update($data);
    }

    public static function find($id)
    {
        return AdminUser::query()->find($id);
    }

    public static function roles(AdminUser $user)
    {
        return $user->roles();
    }

    public static function setDefaultPermission(AdminUser $user)
    {
        $logoutPermission = Menu::query()->where('route', 'admin::logout')->first();
        if ($logoutPermission) {
            $user->givePermissionTo($logoutPermission->name);
        }
    }

    public static function delete($id)
    {
        return AdminUser::destroy($id);
    }
}
