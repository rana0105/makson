<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $fillable = ['quiz_point', 'video_point', 'total_point',];

	public function setTotalPointAttribute($value)
    {
    	$quizPoint  = $this->quiz_point == null? null: $this->quiz_point;
    	$videoPoint = $this->video_point == null? null: $this->video_point;
        $this->attributes['total_point'] = $quizPoint + $videoPoint;
    }
}
