<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Dreport extends Model
{
    protected $fillable = ['company', 'year', 'title', 'file'];
}
