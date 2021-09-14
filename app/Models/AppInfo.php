<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppInfo extends Model
{
    use HasFactory;
    protected $table = 'app_info';

    public function apps($appIds, $langId, $channel)
    {
        $request = request();
        return $this->whereIn('id', $appIds)
            ->where(function ($query) use ($request) {
                $query->whereJsonContains('languages', 0);
                $query->orWhereJsonContains('languages', (int)$request->langId);
            })->where(function ($query) use ($request) {
                $query->whereJsonContains('channels', 0);
                $query->orWhereJsonContains('channels', (int)$request->channel);
            })
            ->where('status', 1)->with([
                'lang' => function ($query) use ($langId) {
                    $query->where('lang_id', $langId);
                },
                'version' => function ($query) {
                $query->where('status', 1);
                    $query->orderBy('version', 'desc');
                },
                'downloadNum'
            ])->get()->toArray();
    }

    public function info($appId, $langId)
    {
        return $this->where('id', $appId)
            ->where('status', 1)->with([
                'lang' => function ($query) use ($langId) {
                    $query->where('lang_id', $langId);
                },
                'version' => function ($query) {
                    $query->where('status', 1);
                    $query->orderBy('version', 'desc');
                },
                'downloadNum'
            ])->first();
    }

    public function appListWithCategory($request)
    {
        return $this->where(function ($query) use ($request) {
            if ($request->title) {
                $query->where('title', 'like', '%' . $request->title . '%');
            }
            if ($request->status === '1' || $request->status === '0') {
                $query->where('status', $request->status);
            }
            if ($request->filter_lang !== '') {
                $query->whereJsonContains('languages', intval($request->filter_lang));
            }
            if ($request->category_id) {
                $query->whereIn('id', function ($query) use ($request) {
                    $query->select('app_id')
                        ->from('app_category')
                        ->where('category_id', $request->category_id);
                });
            }
        })->with('categories')->orderBy('id', 'desc')->paginate($request->size);
    }

    public function appList($request)
    {
        return $this->where(function ($query) use ($request) {
            if ($request->title) {
                $query->where('title', 'like', '%' . $request->title . '%');
            }
            if ($request->status === '1' || $request->status === '0') {
                $query->where('status', $request->status);
            }
            if ($request->category_id) {
                $query->whereIn('id', function ($query) use ($request) {
                    $query->select('app_id')
                        ->from('app_category')
                        ->where('category_id', $request->category_id);
                });
            }
        })->paginate($request->size);
    }

    public function getAppInfoByTitle($title)
    {
        return $this->where('title', $title)->first();
    }

    public function getAppsByPackageName($packageNames)
    {
        return $this->select(['package_name', 'banner_img'])->whereIn('package_name', $packageNames)->get();
    }

    // 后台获取详情
    public function details($appId)
    {
        return $this->where('id', $appId)
            ->with([
                'appLanguages'
            ])->first();
    }

    public function categories()
    {
        return $this->hasMany('App\Models\AppCategory', 'app_id', 'id');
    }

    public function appSearchDetail($appId)
    {
        return $this->where('id', $appId)
            ->with('appLanguages')->first();
    }

    public function getChannelsAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getLanguagesAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getBannerImgAttribute($value)
    {
        return !$value || stripos($value, 'http') === 0 ? $value : env('FILE_URL') . '/' . $value;
    }

    public function getBackgroundImgAttribute($value)
    {
        return !$value || stripos($value, 'http') === 0 ? $value : env('FILE_URL') . '/' . $value;
    }

    public function getSquareImgAttribute($value)
    {
        return !$value || stripos($value, 'http') === 0 ? $value : env('FILE_URL') . '/' . $value;
    }

    public function getScreenshotImgAttribute($value)
    {
        $data = json_decode($value, true);

        foreach ($data as  $k => $v) {
            if (stripos($v, 'http') !== 0) {
                $data[$k] = env('FILE_URL') . '/' . $v;
            }
        }
        return $data;
    }

    public function setScreenshotImgAttribute($value)
    {
        return $this->attributes['screenshot_img'] = json_encode(array_unique($value));
    }
    public function setScoreAttribute($value)
    {
        return $this->attributes['score'] = $value > 5 ? 5 : ($value > 0 ? $value : 1);
    }

    public function setChannelsAttribute($value)
    {
        $this->attributes['channels'] = json_encode(array_map('intval', $value));
    }

    public function setLanguagesAttribute($value)
    {
        $this->attributes['languages'] = json_encode(array_map('intval', $value));
    }

    public function downloadNum()
    {
        return $this->hasOne('App\Models\AppDownloadsCount', 'app_id', 'id');
    }

    public function lang()
    {
        return $this->hasOne('App\Models\AppLang', 'app_id', 'id');
    }

    public function appLanguages()
    {
        return $this->hasMany('App\Models\AppLang', 'app_id', 'id');
    }

    public function version()
    {
        return $this->hasOne('App\Models\AppVersion', 'app_id', 'id');
    }

    public function versions()
    {
        return $this->hasMany('App\Models\AppVersion', 'app_id', 'id');
    }
}
