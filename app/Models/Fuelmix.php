<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fuelmix extends Model
{
    protected $fillable = ['date','type','first', 'second', 'third', 'four', 'five', 'six', 'seven', 'eight', 'nine', 'ten', 'eleven', 'tweleve','thirteen', 'fourteen', 'fifteen', 'sixteen', 'seventeen', 'eighteen', 'ninteen', 'twenty', 'twentyone', 'twentytwo', 'twentythree', 'twentyfour','total'];
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $table = "fuelmix";}
