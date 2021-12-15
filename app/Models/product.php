<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    protected $table = 'hang_hoa';
    protected $primaryKey = 'ma_hh';
    public $timestamps = false;
}