<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Track extends Model
{

    protected $table = 'tracks';
    public $timestamps = true;
    protected $fillable = array('name', 'image');
    protected $appends = array('courses_count', 'image_path');

    public function courses()
    {
        return $this->hasMany('App\Models\Course');
    }

    public function users()
    {
        return $this->belongsToMany('App\Models\User');
    }

    public function getCoursesCountAttribute()
    {
        return $this->courses->count();
    }

    public function getImagePathAttribute()
    {
        return asset('dashboard/images/tracks/' . $this->image);
    }
}
