<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class don_hang extends Model
{
    protected $table = 'don_hang';

    public function ctDonHang()
    {
        return $this->hasMany('App\models\ct_don_hang', 'don_hang_id', 'id');
    }
}
