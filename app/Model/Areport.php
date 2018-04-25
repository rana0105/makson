<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Areport extends Model
{
    protected $fillable = ['company', 'year', 'title', 'file'];
}
