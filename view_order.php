
<html>
<head><link rel="stylesheet" href="../Wrokflow Management Syetem/css/bootstrap.min.css"></head>

<body>
<div class="container-fluid">
<?php include"header1.php";	

	if(isset($_POST['login']))
	{
		include"dbcon.php";
		$ph="select *from order_cargo where order_id='$id'";
		$ph1=mysql_query($ph);
		$ph2=mysql_fetch_assoc($ph1);
		$qu=$ph2['quantity'];
		$wp=$ph2['warehouse_place'];
	}
		?>
		
        
        <div class="row">
        	<div class="col-md-12">
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
						while($q=mysql_fetch_assoc($ph2))
						{
							
							
						}
						
						
						?>
						
                </table>
            
            
            </div>
        </div>
		

<?php  include"footer.php"?>
</div>
</body>
</html>
