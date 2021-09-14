<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppDownloadsCount extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'app_downloads_count';

    public function sortAppByCount($appIds)
    {
        return $this->whereIn('app_id',$appIds)
            ->orderBy('download_num', 'desc')->get()->toArray();
    }
}
