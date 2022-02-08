<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KompetensiKeahlian extends Model
{
    protected $fillable = [
        'nama',
        'kaprog_id',
        'sambutan',
        'tentang',
        'slug',
        'thumb',
    ];
    use HasFactory;
}
