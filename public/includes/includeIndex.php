<?php

class HighScoresForGame {
	public $filename = 'highScores/highScores.csv';
	public $highscore = [];

	public function readScores() {
     	$fileLocation = $this->filename;
		$handle = fopen($fileLocation, 'r');
		$scoreBook = [];
		while(!feof($handle)) {
		    $row = fgetcsv($handle);
		    if (!empty($row)) {
		        $scoreBook[] = $row;
		    }
		}
		fclose($handle);
		return $scoreBook;
    }

     public function writeScores() {
         // Code to write $addressesArray to file $this->filename
    	$highscore = $this->highscore;
     	$handle=fopen($this->filename, 'w');
		foreach ($highscore as $info => $value) {
			if(is_array($value)) {
				//writes to the file
				fputcsv($handle, $value);
		}
	}
		fclose($handle);
    }
}

?>

