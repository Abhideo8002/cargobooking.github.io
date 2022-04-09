<?php
session_start();
if($_SESSION['log']==true)
{
?>
<html>
	<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <title>Warehouse_Main Page||Cargo Booking System</title>
    </head>
    <body>
    	 <div class="container-fluid">
         <?php include"header2.php"?>
         <div class="row">
         <div class="col-md-12">
         <img src="image/ocean-freight-services1_01b9ecc0a7c44ef7b67c78a5dc372753_1024x1024.jpg" width="1320px" height="400px">
         </div>
         </div>
         
         <?php include"footer.php"?>
         </div>   
    </body>
</html>
<?php
}
else
{
	header("location:index.php");
}
?>