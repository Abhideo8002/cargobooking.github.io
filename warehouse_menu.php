<html>
	<head>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
body {margin:0;}
ul.topnav {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #000;
}

ul.topnav li {float: left;}

ul.topnav li a {
  display: inline-block;
  color: #f2f2f2;
  text-align: center;
  padding: 16px 40px;
  text-decoration: none;
  transition: 0.3s;
  font-size: 17px;
}

ul.topnav li a:hover {background-color: #F00;}

ul.topnav li.icon {display: none;}

@media screen and (max-width:680px) {
  ul.topnav li:not(:first-child) {display: none;}
  ul.topnav li.icon {
    float: right;
    display: inline-block;
  }
}

@media screen and (max-width:680px) {
  ul.topnav.responsive {position: relative;}
  ul.topnav.responsive li.icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  ul.topnav.responsive li {
    float: none;
    display: inline;
  }
  ul.topnav.responsive li a {
    display: block;
    text-align: left;
  }
}
</style>
    </head>
    <body>
    	        <div class="row">
        	<div class="col-md-12">
        		<ul class="topnav">
  <li><a href="acceptance.php">Acceptance</a></li>
  <li><a href="#">Damage Good</a></li>
  <li><a href="logout1.php">Logout</a></li>
  


  <li class="icon">
    <a href="javascript:void(0);" style="font-size:15px;" onClick="myFunction()">☰</a>
  </li>
</ul>


<script>
function myFunction() {
    document.getElementsByClassName("topnav")[0].classList.toggle("responsive");
}
</script>

                
            </div>

         </div>
      
    </body>
</html>