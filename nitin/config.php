<?php 
class clscon
{
	private $link;
	function db_connection(){
		$this->link=mysqli_connect("localhost","root","","student");
		return $this->link;
			}
			function db_close()
			{
				mysqli_close($this->link);
			}
}
?>