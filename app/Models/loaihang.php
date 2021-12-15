<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loaihang extends Model
{
    protected $table = 'loai_hang';
    protected $primaryKey = 'ma_loai';
    public $timestamps = false;
}