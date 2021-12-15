<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class thanhvien extends Model
{
    protected $table = 'khach_hang';
    protected $primaryKey = 'ma_kh';
    public $timestamps = false;
}
