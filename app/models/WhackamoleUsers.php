<?php

class WhackamoleUsers extends BaseModel
{
	    protected $table = 'WhackamoleUsers';

	    public function scores() 
	    {
	    	return $this->hasMany('whackamoleScores');
	    }

	    public function setPasswordAttribute($value)
		{
			$this->attributes['password'] = Hash::make($value);
		}
}