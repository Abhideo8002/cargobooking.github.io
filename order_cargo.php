
<html>
<head><link rel="stylesheet" href="css/bootstrap.css"></head>

<body>
<div class="container-fluid">
<?php  include"header1.php";
if(isset($_POST['log']))
{
$oi=$_POST['t1'];
$qn=$_POST['t2'];
$wi=$_POST['t3'];
include"dbcon.php";
$q="insert into order_cargo(order_id,quantity,warehouse_place)value('$oi','$qn','$wi')";
mysql_query($q);
}


include"dbcon.php";
$a="select *from order_cargo order by  order_id desc";
$a1=mysql_query($a);
$a2=mysql_fetch_assoc($a1);
$a3=$a2['order_id'];
$od=$a3+1;



?>
<h1 align="center">Order Cargo</h1>

<div class="row">
<div class="col-md-3"></div>
<div class="col-md-6">
  <form method="post">
    <label>Order ID</label>
    <input type="text" name="t1" class="form-control" readonly value="<?php echo$od; ?>">

    <label>Quantity</label>
    <input type="text" name="t2"class="form-control">
    <label>Warehouse Place</label>
    <input type="text" name="t3" class="form-control">
    	   <br>
        <input type="submit" value="Order" class="btn btn-success btn-group-justified" name="log">
        <br>
  </form>
</div>
<div class="col-md-3"></div>
</div>
<br>
<br>
<?php  include"footer.php"?>
</div>
</body>
</html>
