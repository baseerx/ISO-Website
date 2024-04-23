<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ncp extends Model
{
    protected $fillable = ['date','first', 'second', 'third', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'tweleve','thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'ninteen', 'twenty', 'twentyone', 'twentytwo', 'twentythree', 'twentyfour','total'];
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = "gen_requirement";
}
