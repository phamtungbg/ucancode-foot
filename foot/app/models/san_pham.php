<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class san_pham extends Model
{
    protected $table = 'san_pham';
    public $timestamps = false;

    public function danhMuc()
    {
        return $this->belongsTo('App\models\danh_muc', 'danh_muc_id', 'id');
    }
    public function ctDonHang()
    {
        return $this->hasMany('App\models\ct_don_hang', 'san_pham_id', 'id');
    }
}
