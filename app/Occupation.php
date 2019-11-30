<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    protected $table = 'occupation';
    protected $fillable = ['id', 'name', 'description'];
    protected $hidden = ['trajectory_id'];
    public function trajectory()
    {
        return $this->belongsTo('App\Trajectory');
    }
    public function salary()
    {
        return $this->hasOne('App\Salary');
    }
    public function majors()
    {
        return $this->belongsToMany('App\Major', 'occupation_major');
    }
    public function description()
    {
        return stream_get_contents($this->getAttribute('description'));
    }
}
