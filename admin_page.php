<?php session_start(); ?>
<html>
	<head>
    	<title>Admin Login || Cargo Bookimg System</title>
    </head>
    <body>
    	<div class="container-fluid">
        	<?php 
			$er1=$er2="";
				include "header.php";
				if(isset($_POST['ad_login']))
				{ 
				
					$id=$_POST['t1'];
					$pass=$_POST['t2'];
					if($id!="" AND $pass!="")
					{
						include "dbcon.php";
						$as="select *from admin_log where user_id='$id'";
						$as1=mysql_query($as);
						$as2=mysql_fetch_assoc($as1);
						$pass1=$as2['password'];
						if($pass==$pass1)
						{
							$_SESSION['log']=true;
							$_SESSION['name']=$as2['name'];
							header("location:admin_dashboard.php");
						}
						else
						{
							$er2="Username and Password mismatch...";
						}
					}
					else
					{
						$er1="Username and Password is required...";
					}
				}
			 ?>
            
       <div class="row">
       
            	<div class="col-md-4 col-md-offset-4">
                
                <form name="f1" method="post">
                <h2><font color="#333333">Admin Login</font></h2>
                 <label><font color="#F00"><?php echo $er1; ?></font></label><br>
                 <label><font color="#F00"><?php echo $er2; ?></font></label><br>
                <label>Username ID</label>
                <input type="text" name="t1" class=                      "form-control"/>
                <label>Password</label>
                <input type="password" name="t2" class=                 "form-control"/><br>
                <input type="submit" value="Login" name="ad_login" class="btn btn-success btn-group-justified">
                
                <br>
       <br><br>
       <br>
       <br>
       <br>
       <br>
       <br>
                
                </form>
                
     
                
                </div>
                
                <div class="col-md-4"></div>
            
                </div>
               
                </div>
               
                
      
            <?php include "footer.php" ?>
            </div>
    </body>
</html>