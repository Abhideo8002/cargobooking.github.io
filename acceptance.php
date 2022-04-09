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
         <?php include"header2.php"; include "dbcon.php";
			$id=$_SESSION['id'];
			$q="select *from add_warehouse where id='$id'";
			$qu1=mysql_query($q);
			$qu2=mysql_fetch_assoc($qu1);
			$pl=$qu2['place']; ?>
         <div class="row">
         <div class="col-md-8 col-md-offset-2">
         	<section class="panel panel-success">
            	<section class="panel-heading">
                	<h2>Order Data</h2>
                </section>	
                <section class="panel-body">
                	<table class="table">
                    	<tr class="active">
                        	<th>Order Id</th>
                            <th>Warehouse Place</th>
                            <th>Quantity</th>
                            <th>Status</th>
                            <th>Accepted</th>
                            <th>Shifted</th>
                        </tr>
                        <?php
							$or1="select *from order_cargo where warehouse_place='$pl'";
							$or2=mysql_query($or1);
							while($or3=mysql_fetch_assoc($or2))
							{
								$id3=$or3['order_id'];
								?>
                                	<tr>
                                    	<td><?php echo $or3['order_id']; ?></td>
                                        <td><?php echo $or3['warehouse_place']; ?></td>
                                        <td><?php echo $or3['quantity']; ?></td>
                                    	<td><?php echo $or3['status']; ?></td>
                 <td><?php echo "<a href='act1.php?id=$id3'>Accept</a>"; ?></td>
                <td><?php echo "<a href='shi1.php?id=$id3'>Shifted</a>"; ?></td>
                                    </tr>
                                <?php
							}
						?>
                    </table>
                </section>
            </section>
         </div>
         </div>
         <div class="row">
         <div class="col-md-8 col-md-offset-2">
         	<section class="panel panel-success">
            	<section class="panel-heading">
                	<h2>Shifted Data</h2>
                </section>	
                <section class="panel-body">
                	<table class="table">
                    	<tr class="active">
                        	<th>Order Id</th>
                            <th>Place</th>
                            <th>Quantity</th>
                            <th>Shifted To</th>
                            <th>Capacity</th>
                            <th>Quantity Shifted</th>
                            <th>Status</th>
                            <th>Accepted</th>
                            <th>Shifted</th>
                        </tr>
                        <?php
							$a="select *from shift_cargo where shifted_to='$pl'";
							$a1=mysql_query($a);
							while($a2=mysql_fetch_assoc($a1))
							{
								$id2=$a2['order_id'];
								?>
                                	<tr>
                                    	<td><?php echo $a2['order_id']; ?></td>
                                        <td><?php echo $a2['place']; ?></td>
                                        <td><?php echo $a2['quantity']; ?></td>
                                        <td><?php echo $a2['shifted_to']; ?></td>
                                        <td><?php echo $a2['capacity']; ?></td>
                                        <td><?php echo $a2['quantity_shifted']; ?></td>
                                        <td><?php echo $a2['status']; ?></td>
                                        <td><?php echo "<a href='act.php?id=$id2'>Accept</a>"; ?></td>
                                        <td><?php echo "<a href='shi.php?id=$id2'>Shifted</a>"; ?></td>
                                    </tr>
                                <?php
							}
						?>
                    </table>
                </section>
            </section>
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