<?php
include_once "./config.php";
class clsemp
{
public $empno,$ename,$add,$esal;
public function save_rec()
{
	  $empno=$_POST["t1"];
	  $ename=$_POST["t2"];
	  $eadd=$_POST["t3"];
	  $esal=$_POST["t4"];
	$con= new clscon();
	$link=$con->db_connection();
	$qry="insert chiku(empno,ename,eadd,esal)" 
			. "values($empno,'$ename','$eadd',$esal)";
			$res=mysqli_query($link,$qry);

			if(mysqli_affected_rows($link)==1)
			{
				$con->db_close();
				return true;
			}
			else
			{
				$con->db_close();
				return false;
			}

}

}
// public function disp_rec()
// 	{
// 		$con=new clscon();
// 		$link=$con->db_connection();
// 		$qry="select * from chiku";
// 		$res=mysqli_query($link,$qry)or die(mysqli_error($link));
// 		$ar=array();
// 		$i=0;

// 	while($r=mysqli_fetch_array($res))
// 	{
// 		$ar[$i]=$r;
// 		$i++;
// 	}
// 	$con->db_close();
// 	return $ar;
// }

// 	function fnd_rec()

// {
// 	$con=new clscon();
// 	$link=$con->db_connection();
// 	$qry="SELECT * FROM chiku WHERE empno=$eno";
// 	$res=mysqli_query($link,$qry);
// 	if($r=mysqli_fetch_array($res))
// 	{
// 		$ei=$r[0];
// 		$en=$r[1];
// 		$ed=$r[2];
// 		$es=$r[3];
// 	}
// 	$con->db_close();
// 	}

	
}
?>