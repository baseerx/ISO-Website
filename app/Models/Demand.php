<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Demand extends Model
{
    protected $fillable = ['consumption_id','drawn_time','fesco', 'gepco', 'hesco', 'iesco', 'kesc', 'lesco', 'mepco', 'pesco', 'qesco', 'sepco', 'tesco'];
    public $timestamps = false;
    protected $primaryKey = 'ldemid';
    protected $table = "load_demand";
}
