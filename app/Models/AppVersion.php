<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppVersion extends Model
{
    use HasFactory;
    protected $table = 'app_version';

    public function versions($request)
    {
        return $this->where('app_id', $request->id)
            ->orderBy('version', 'desc')->paginate($request->size);
    }

    public function details($id)
    {
        return $this->find($id);
    }

    public function getAppUrlAttribute($value)
    {
        return !$value || stripos($value, 'http') === 0 ? $value : env('FILE_URL') . '/' . $value;
    }

    public function setPackageSizeAttribute($value)
    {
        $file = filesize('storage/' . $value);
        $calc = $file / 1024 / 1024;
        if ($calc >= 1) {
            $size = ceil($calc) . 'M';
        } else {
            $calc = $file / 1024;
            $size = ceil($calc) . 'k';
        }
        return $this->attributes['package_size'] = $size;
    }
    public function setPackageMd5ValueAttribute($value)
    {
        $content = file_get_contents('storage/' . $value);
        return $this->attributes['package_md5_value'] = md5($content);
    }
}
