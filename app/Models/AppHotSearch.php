<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppHotSearch extends Model
{
    use HasFactory;
    protected $table = 'app_hot_search';

    public function getHotSearchApp($request, $size)
    {
        return $this->select(['app_hot_search.id', 'app_hot_search.app_id', 'app_info.package_name' ,'app_hot_search.sort', 'app_info.status', 'app_info.title', 'app_info.square_img'])
            ->leftJoin('app_info', 'app_hot_search.app_id', '=', 'app_info.id')
            ->orderBy('sort')
            ->paginate($size);
    }
}
