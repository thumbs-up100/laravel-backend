<?php
/**
 * Date: 2019/2/25 Time: 9:31
 *
 * @author  Eddy <cumtsjh@163.com>
 * @version v1.0.0
 */

use Illuminate\Support\Facades\Route;

Route::get('lang/{locale}', ['as' => 'lang.change', 'uses' => 'LanguageController@setLocale']);

Route::group(
    [
        'as' => 'admin::'
    ],
    function () {
        Route::middleware('log')->group(function () {
            Route::get('/', 'Auth\LoginController@showLogin')->name('home');
            Route::get('/login', 'Auth\LoginController@showLogin')->name('login.show');
            Route::post('/login', 'Auth\LoginController@login')->name('login');
            Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
        });

        Route::middleware( 'authorization:admin')->group(function () {

            Route::get('/index', 'HomeController@showIndex')->name('index');
            Route::get('/aggregation', 'HomeController@showAggregation')->name('aggregation');

            //NEditor路由
            Route::post('/neditor/serve/{type}', 'NEditorController@serve')->name('neditor.serve');

            Route::match(['get', 'post'], '/ueditor/serve', 'UEditorController@serve')->name('ueditor.serve');

            // 管理员用户管理
            Route::get('/admin_users', 'AdminUserController@index')->name('adminUser.index');
            Route::get('/admin_users/list', 'AdminUserController@list')->name('adminUser.list');
            Route::get('/admin_users/create', 'AdminUserController@create')->name('adminUser.create');
            Route::post('/admin_users', 'AdminUserController@save')->name('adminUser.save');
            Route::get('/admin_users/{id}/edit', 'AdminUserController@edit')->name('adminUser.edit');
            Route::put('/admin_user/{id}', 'AdminUserController@update')->name('adminUser.update');
            Route::delete('/admin_user/{id}', 'AdminUserController@delete')->name('adminUser.delete');

            Route::get('/admin_users/{id}/role', 'AdminUserController@role')->name('adminUser.role.edit');
            Route::put('/admin_user/{id}/role', 'AdminUserController@updateRole')->name('adminUser.role.update');

            // 菜单管理
            Route::get('/menus', 'MenuController@index')->name('menu.index');
            Route::get('/menus/list', 'MenuController@list')->name('menu.list');
            Route::get('/menus/create', 'MenuController@create')->name('menu.create');
            Route::post('/menus', 'MenuController@save')->name('menu.save');
            Route::get('/menus/{id}/edit', 'MenuController@edit')->name('menu.edit');
            Route::put('/menus/{id}', 'MenuController@update')->name('menu.update');
            Route::delete('/menus/{id}', 'MenuController@delete')->name('menu.delete');
            Route::post('/menus/discovery', 'MenuController@discovery')->name('menu.discovery');
            Route::post('/menus/batch', 'MenuController@batch')->name('menu.batch');

            // 角色管理
            Route::get('/roles', 'RoleController@index')->name('role.index');
            Route::get('/roles/list', 'RoleController@list')->name('role.list');
            Route::get('/roles/create', 'RoleController@create')->name('role.create');
            Route::post('/roles', 'RoleController@save')->name('role.save');
            Route::get('/roles/{id}/edit', 'RoleController@edit')->name('role.edit');
            Route::put('/roles/{id}', 'RoleController@update')->name('role.update');
            Route::delete('/roles/{id}', 'RoleController@delete')->name('role.delete');

            Route::get('/roles/{id}/permission', 'RoleController@permission')->name('role.permission.edit');
            Route::put('/roles/{id}/permission', 'RoleController@updatePermission')->name('role.permission.update');

            // 配置管理
            Route::get('/configs', 'ConfigController@index')->name('config.index');
            Route::get('/configs/list', 'ConfigController@list')->name('config.list');
            Route::get('/configs/create', 'ConfigController@create')->name('config.create');
            Route::post('/configs', 'ConfigController@save')->name('config.save');
            Route::get('/configs/{id}/edit', 'ConfigController@edit')->name('config.edit');
            Route::put('/configs/{id}', 'ConfigController@update')->name('config.update');
            Route::delete('/configs/{id}', 'ConfigController@delete')->name('config.delete');

            // 日志
            Route::get('/logs', 'LogController@index')->name('log.index');
            Route::get('/logs/list', 'LogController@list')->name('log.list');
            Route::get('/logs/create', 'LogController@create')->name('log.create');


            // 错误页面 500 404
            Route::get('500', 'Err@err50x')->name('err50x');
            Route::get('404', 'Err@err404')->name('err404');

        });
    }
);
