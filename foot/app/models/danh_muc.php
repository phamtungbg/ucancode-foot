<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class danh_muc extends Model
{
    protected $table = 'danh_muc';
    public $timestamps = false;

    public function tinTuc()
    {
        return $this->hasMany('App\models\tin_tuc', 'danh_muc_id', 'id');
    }
    public function sanPham()
    {
        return $this->hasMany('App\models\san_pham', 'danh_muc_id', 'id');
    }
}
