<html>
	<head>
    </head>
    <body
    	<?php
    	$con=mysql_connect("localhost","root","");
				if(!$con)
				{
					echo"not connected";
				}
				mysql_select_db("cargo_system");
	
				?>
   
    </body>
</html>