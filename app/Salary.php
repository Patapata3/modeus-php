<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    protected $table = 'salary';
    protected $fillable = ['id', 'highest', 'yearOfExperience', 'withoutExperience'];
    protected $hidden = ['occupation_id'];
    public function occupation()
    {
        $this->belongsTo('App\Occupation');
    }
}
