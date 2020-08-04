<?php
class MyExcel
{ 
	private $_sheet;
	public function __construct($sheet) {
		$this->sheet = $sheet;
	}
	public static function print_line($line,$column,$text,$style=null,$separator = "\t") {
		
	}
	public static function getIndex($line,$column) {
		$c = chr($column + 64);
		return $c."".$line;
	}
}