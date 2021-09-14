<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Recommends extends Model
{
    use HasFactory;

    public function recs($request)
    {
        return $this->where('status', 1)
            ->where(function($query) use ($request) {
                $query->whereJsonContains('languages', 0);
                $query->orWhereJsonContains('languages', (int)$request->langId);
            })->where(function($query) use ($request){
                $query->whereJsonContains('channels', 0);
                $query->orWhereJsonContains('channels', (int)$request->channel);
            })->orderBy('sort')
            ->with([
                'contents' => function ($query) use ($request) {
                    $query->where(function($query) use ($request) {
                        $query->whereJsonContains('languages', 0);
                        $query->orWhereJsonContains('languages', (int)$request->langId);
                    })->where(function($query) use ($request){
                        $query->whereJsonContains('channels', 0);
                        $query->orWhereJsonContains('channels', (int)$request->channel);
                    })->orderBy('sort', 'asc');
                },
                'lang' => function ($query) use ($request) {
                    $query->where('lang_id', $request->langId);
                }])->get();
    }

    public function info($id)
    {
        $info = $this->where('id', $id)->with('recommendLanguages')->first()->toArray();
        $info['recommend_languages'] = array_column($info['recommend_languages'], null, 'lang_id');
        return $info;
    }

    public function recommendLanguages()
    {
        return $this->hasMany('App\Models\RecommendLang', 'rec_id', 'id');
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
    // 后台分类列表
    public function recommends($request)
    {
        return $this->withCount('contents')->orderBy('sort')->paginate($request->size);
    }

    public function contents()
    {
        return $this->hasMany('App\Models\RecommendsContents', 'rec_id', 'id');
    }

    public function lang()
    {
        return $this->hasOne('App\Models\RecommendLang', 'rec_id', 'id');
    }

    public function languages()
    {
        return $this->hasMany('App\Models\RecommendLang', 'rec_id', 'id');
    }

}
