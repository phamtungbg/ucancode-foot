<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class ct_don_hang extends Model
{
    protected $table = 'ct_don_hang';
    public $timestamps = false;

    public function maGiamGia()
    {
        return $this->belongsTo('App\models\ma_giam_gia', 'ma_giam_gia_id', 'id');
    }
    public function donHang()
    {
        return $this->belongsTo('App\models\don_hang', 'don_hang_id', 'id');
    }
    public function sanPham()
    {
        return $this->belongsTo('App\models\san_pham', 'san_pham_id', 'id');
    }
}
