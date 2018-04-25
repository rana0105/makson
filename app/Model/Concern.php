<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Concern extends Model
{
    protected $fillable = ['name', 'description', 'logo', 'on_hover_logo', 'image'];
}
