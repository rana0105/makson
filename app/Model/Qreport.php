<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Qreport extends Model
{
    protected $fillable = ['company', 'year', 'title', 'file'];
}
