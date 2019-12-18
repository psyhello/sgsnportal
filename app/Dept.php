<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dept extends Model
{
	protected $fillable = ['name','parent'];

    public function company()
    {
    	return $this->belongsTo(Company::class);
    }

    public function user()
    {
    	return $this->hasMany(User::class);
    }
    
}
