<?php

class WhackamoleScores extends Basemodel 
{
	protected $table = 'WhackamoleScores';

	public function user()
	{
	    return $this->belongsTo('whackamoleUser');
	}
}
