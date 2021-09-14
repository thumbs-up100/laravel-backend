<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppLang extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'app_lang';

    public function getAppLanguagesByAppId($appId)
    {
        return $this->where('app_id', $appId)->get()->toArray();
    }
}
