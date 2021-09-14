<?php
/**
 * @author  Eddy <cumtsjh@163.com>
 */

namespace App\Models\Admin;

class Log extends Model
{
    protected $guarded = [];

    public static $searchField = [
        'user_name' => '用户',
        'url' => 'URL'
    ];

    public static $listField = [
        'user_name' => '用户',
        'url' => 'URL',
        'data' => 'data',
        'ip' => 'IP',
        'ua' => 'userAgent',
    ];

    public function adminUser()
    {
        return $this->belongsTo('App\Models\Admin\AdminUser', 'admin_user_id');
    }
}
