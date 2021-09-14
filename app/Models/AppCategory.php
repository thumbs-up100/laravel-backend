<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppCategory extends Model
{
    use HasFactory;

    protected $table = 'app_category';
    public $timestamps = false;

    public function getCategoriesByAppId($appId)
    {
        return $this->where('app_id', $appId)
            ->leftJoin('category', 'app_category.category_id', '=', 'category.id')
            ->where('category.status', 1)
            ->get()->toArray();
    }

    public function getAppByCategoryIds($categoryIds, $notId, $size)
    {
        return $this->whereIn('category_id', $categoryIds)
            ->leftJoin('app_info', 'app_category.app_id', '=', 'app_info.id')
            ->where('app_info.status', 1)
            ->whereNotIn('app_id', [$notId])
            ->orderBy('sort')
            ->paginate($size)->toArray();
    }

    public function getAppsByCategoryId($categoryId, $size)
    {
        $request = request();
        return $this->where('category_id', $categoryId)
            ->leftJoin('app_info', 'app_category.app_id', '=', 'app_info.id')
            ->where(function ($query) use ($request) {
                $query->whereJsonContains('languages', 0);
                $query->orWhereJsonContains('languages', (int)$request->langId);
            })->where(function ($query) use ($request) {
                $query->whereJsonContains('channels', 0);
                $query->orWhereJsonContains('channels', (int)$request->channel);
            })
            ->where('app_info.status', 1)
            ->where('app_category.status', 1)
            ->orderBy('sort')
            ->paginate($size)->toArray();
    }

    public function getAppsByCategoryIdAndCondition($request, $size)
    {
        $categoryId = $request->id;
        return $this->where('category_id', $categoryId)
            ->where(function ($query) use ($request) {
                if ($request->keyword) {
                    $query->where('app_info.title', 'like', '%' . $request->keyword . '%');
                    $query->orWhere('app_info.package_name', 'like', '%' . $request->keyword . '%');
                }
            })
            ->select(['app_category.id', 'app_category.app_id', 'app_info.package_name' ,'app_category.sort', 'app_category.status', 'app_info.title', 'app_info.square_img'])
            ->leftJoin('app_info', 'app_category.app_id', '=', 'app_info.id')
            ->orderBy('sort')
            ->paginate($size);
    }

    public function setStatusAttribute($value)
    {
        return $value ?: 1;
    }
    public function setSortAttribute($value)
    {
        return $value ?: 0;
    }
}
