<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Major extends Model
{
    protected $table = 'major';
    protected $fillable = ['id', 'name'];
    protected $hidden = ['pivot'];
    public function occupations()
    {
        $this->belongsToMany('App\Occupation');
    }
}
