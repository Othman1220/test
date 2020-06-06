<?php

/**
 * 
 */
class Database
{
	
	private $con;
    //private $option=mysqli_set_charset($con,'utf8');

	public function connect(){
		$this->con = new Mysqli("localhost", "root", "", "sfe");
		
				return $this->con;
	}
}

?>