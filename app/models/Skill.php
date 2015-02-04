<?php

class Skill extends BaseModel
{
    protected $table = 'skills';

	public function getLevelAttribute($value)
	{
		return $value*100;
	}
}