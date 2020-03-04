<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ma_giam_gia extends Model
{
    protected $table = 'ma_giam_gia';
    public $timestamps = false;

    public function ctDonHang()
    {
        return $this->hasOne('App\models\ct_don_hang', 'ma_giam_gia_id', 'id');
    }
}
