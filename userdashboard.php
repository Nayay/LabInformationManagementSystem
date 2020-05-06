<?php
session_start();
?>
<html>
    <head>
    		<title>LMIS - Signup</title>
    		<meta charset="utf-8" />
    		<meta name="viewport" content="width=device-width, initial-scale=1" />
    		<link rel="stylesheet" href="assets/css/main.css" />

    	</head>
    <body>
<!-- Header -->
			<header id="header">
				<h1><strong><a href="userdashboard.php">LIMS</a></strong></h1>
				<nav id="nav">
					<ul>

                       	<li> <?php echo "Welcome,"." "." ". $_SESSION['userid'] ;  ?></li>
                       	<li>  <a href="logout.php"> Logout</a></li>
                     </ul>
				</nav>
			</header>
    <body>

<!-- Main -->
        <section id="two" class="wrapper style2 ">
   					<div class="container">
                    <h2>Dashboard</h2>
                      <h2>	<a href="newbatch.php" class="button special icon fa-plus">Add New Sample Batch</a>
                    	<a href="displaybatch.php" class="button special icon fa-desktop">Display Sample Batch</a></h2>


                   </div>


			</section>


<!-- Footer -->
			<footer id="footer">
				<div class="container">

					<ul class="copyright">
						<li>&copy; Lambton College, 2020</li>
						<li>Design: <a href="http://templated.co">Phoenix</a></li>

					</ul>
				</div>
			</footer>




</body>
</html>



           