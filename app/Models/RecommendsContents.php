<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RecommendsContents extends Model
{
    use HasFactory;

    public function getContentList($request)
    {
        return $this->where('rec_id', $request->id)
            ->select(['recommends_contents.*', 'app_info.square_img', 'app_info.title'])
            ->leftJoin('app_info', 'recommends_contents.app_id', '=', 'app_info.id')
            ->orderBy('sort')->paginate($request->size);
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
}
