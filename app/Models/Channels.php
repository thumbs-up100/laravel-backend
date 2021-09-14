<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Channels extends Model
{
    use HasFactory;
    protected $connection = 'db_partnerttest_lo';

    protected $table = 'long_shop';

    public function channels()
    {
        $data = $this->get()->toArray();
        array_unshift($data, [
            'shop_id' => 0,
            'shop_name' => '全部'
        ]);
        return $data;
    }
}
