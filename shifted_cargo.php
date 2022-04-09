
<html>
<head><link rel="stylesheet" href="../Wrokflow Management Syetem/css/bootstrap.min.css"></head>

<body>
<div class="container-fluid">
<?php include"header1.php";	

	if(isset($_POST['login']))
	{
		include"dbcon.php";
		$oi=$_POST['t1'];
		$ph="select *from order_cargo where order_id='$oi'";
		$ph1=mysql_query($ph);
		$ph2=mysql_fetch_assoc($ph1);
		$qu=$ph2['quantity'];
		$wp=$ph2['warehouse_place'];
		$sh=$_POST['t2'];
		$cp=$_POST['t3'];
		$wq=$_POST['t4'];
		
		$q="insert into shift_cargo(order_id,place,quantity,shifted_to,	capacity,quantity_shifted)value('$oi','$wp','$qu','$sh','$cp','$wq')";
		mysql_query($q);
	
		
	}
	

?>
<h1 align="center">Shifted Cargo</h1>
<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
  <form method="post">
    <label>Order ID</label>
    <select name="t1" class="form-control">
    	<option>Select Order ID</option>
    	<?php
			include"dbcon.php";
			$a="select *from order_cargo order by  order_id desc";
			$a1=mysql_query($a);
			while($a2=mysql_fetch_assoc($a1))
			{
				echo "<option>".$a2['order_id']."</option>";
			}
			
		?>
    </select>
    
    <label>Shifted To</label>
    
    <input type="text" class="form-control" name="t2">
        
    <label>Capacity</label>
    <input type="text" name="t3" class="form-control">
    <label>Quantity in Warehouse Shift</label>
    <input type="text"  name="t4" class="form-control">
    <br>
        <input type="submit" value="Submit" class="btn btn-success btn-group-justified" name="login">        <br>
  </form>
</div>
<br>
<div class="col-md-3"></div>
</div>

<?php  include"footer.php"?>
</div>
</body>
</html>
