<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LoadDrawn extends Model
{
    protected $fillable = ['consumption_id','drawn_time', 'fesco', 'gepco', 'hesco', 'iesco', 'kesc', 'lesco', 'mepco', 'pesco', 'qesco', 'sepco', 'tesco'];
    public $timestamps = false;
    protected $primaryKey = 'drwid';
    protected $table = "load_drawn";
}
