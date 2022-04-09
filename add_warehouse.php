<html>
<head><link rel="stylesheet" href="css/bootstrap.css"></head>
<body>
<div class="container-fluid">
<?php  include"header1.php";

       if(isset($_POST['add']))
	  {
		  $id=$_POST['t1'];
		  $pl=$_POST['t2'];
		  $sn=$_POST['t3'];
		  $cp=$_POST['t4'];
		  $mb=$_POST['t5'];
		  $pw=$_POST['t6'];
		  
		   include"dbcon.php";
		   $a="insert into add_warehouse(id,place,supervisor_name,capacity,mobile_number,password)value('$id','$pl','$sn','$cp','$mb','$pw')";
		   mysql_query($a);
		   
	   }



include "dbcon.php";
$in="select *from add_warehouse order by id desc";
$a1=mysql_query($in);
$a2=mysql_fetch_assoc($a1);
$id1=$a2['id'];
$id2=$id1+1;



?>
  <div class="row">
  	<div class="col-md-3"></div>
    <div class="col-md-6">
    <h2 align="center">Add Warehouse</h2>
    <form method="post">
    <label>ID</label>
    <input type="text" name="t1" class="form-control" readonly value="<?php echo $id2;  ?>">
    <label>Place</label>
    <input type="text" name="t2" class="form-control">
    <label>Supervisor Name</label>
    <input type="text" name="t3" class="form-control">
    <label>Capacity</label>
    <input type="text" name="t4" class="form-control">
    <label>Mobile Number</label>
    <input type="text" name="t5" class="form-control" maxlength="10">
    <label>Password</label>
    <input type="text" name="t6" class="form-control">

    <br>
    <input type="submit" name="add" value="Submit" class=" btn btn-success btn-group-justified">
<br>
<br>


    </form>
    
    </div>
    <div class="col-md-3"></div>
    
    	
    </div>
    <?php  include"footer.php"?>
    </div>
</body>
</html>