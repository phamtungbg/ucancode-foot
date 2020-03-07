<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class tin_tuc extends Model
{
    protected $table = 'tin_tuc';

    public function thanhVien()
    {
        return $this->belongsTo('App\User', 'thanh_vien_id', 'id');
    }
    public function danhMuc()
    {
        return $this->belongsTo('App\models\danh_muc', 'danh_muc_id', 'id');
    }
}
