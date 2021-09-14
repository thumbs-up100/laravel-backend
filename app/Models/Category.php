<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $table = 'category';

    public function categories($request)
    {
        return $this->where('status', 1)->where('pid', 0)
            ->where(function ($query) use ($request) {
                $query->whereJsonContains('languages', 0);
                $query->orWhereJsonContains('languages', (int)$request->langId);
            })->where(function ($query) use ($request) {
                $query->whereJsonContains('channels', 0);
                $query->orWhereJsonContains('channels', (int)$request->channel);
            })
            ->with([
                'children' => function ($query) use ($request) {
                    $query->with([
                        'lang' => function ($query) use ($request) {
                            $query->where('lang_id', $request->langId);
                        }
                    ])->where('status', 1)
                        ->where(function ($query) use ($request) {
                            $query->whereJsonContains('languages', 0);
                            $query->orWhereJsonContains('languages', (int)$request->langId);
                        })->where(function ($query) use ($request) {
                            $query->whereJsonContains('channels', 0);
                            $query->orWhereJsonContains('channels', (int)$request->channel);
                        })
                        ->orderBy('sort', 'asc');
                },
                'lang' => function ($query) use ($request) {
                    $query->where('lang_id', $request->langId);
                }
            ])->orderBy('sort')->get();
    }

    public function info($id)
    {
        $info = $this->where('id', $id)->with('categoryLanguages')->first()->toArray();
        $info['category_languages'] = array_column($info['category_languages'], null, 'lang_id');
        return $info;
    }

    public function setChannelsAttribute($value)
    {
        $this->attributes['channels'] = json_encode(array_map('intval', $value));
    }

    public function setLanguagesAttribute($value)
    {
        $this->attributes['languages'] = json_encode(array_map('intval', $value));
    }

    public function getLanguagesAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getChannelsAttribute($value)
    {
        return json_decode($value, true);
    }

    public function getImageAttribute($value)
    {
        return env('FILE_URL') . '/' . $value;
    }

    public function children()
    {
        return $this->hasMany($this, 'pid', 'id');
    }

    public function contents()
    {
        return $this->hasMany('App\Models\AppCategory', 'category_id', 'id');
    }

    public function lang()
    {
        return $this->hasOne('App\Models\CategoryLang', 'category_id', 'id');
    }

    public function categoryLanguages()
    {
        return $this->hasMany('App\Models\CategoryLang', 'category_id', 'id');
    }

    // 后台分类列表
    public function categoriesList($request)
    {
        return $this->where(function($query) use ($request){
            if ($request->title) {
                $query->where('title', 'like', '%' . $request->title . '%');
            }
            if (isset($request->pid)) {
                $query->where('pid', $request->pid);
            }
        })->withCount('contents')->orderBy('sort')->paginate($request->size);
    }

    public function parentCategoriesList()
    {
        $data = $this->where('pid', 0)->pluck('title', 'id')->toArray();
        return ['顶级分类'] + $data;
    }

    public function categoriesSearchList()
    {
        return $this->orderBy('sort')->pluck('title', 'id');
    }

}
