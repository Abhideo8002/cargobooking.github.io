<?php
session_start();
if($_SESSION['log']==true)
{
		 $id2=$_GET['id'];
		include "dbcon.php";
		$up="update shift_cargo set status='Shifted to Destination' where order_id='$id2'";
		$up1=mysql_query($up);
		if($up1){ header("location:warehouse_dashboard.php");}
}
else
{
	header("location:index.php");
}
?>