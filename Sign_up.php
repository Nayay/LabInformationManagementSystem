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
				<h1><strong><a href="index.php">LIMS</a></strong></h1>
				<nav id="nav">
					<ul>
                       	<li> <a href="index.php"> Home</a></li>
                       	<li> <a href="Sign_up.php"> Signup</a></li>
                       	<li> <a href="contactUs.html"> Contact us </a></li>
                     </ul>
				</nav>
			</header>
<!-- Main -->
        <section id="two" class="wrapper style2 special">
   					<div class="container">
                    <h2>Signup</h2>
                      <form method="post"  name="sampleForm">
                         <div class="6u$">
                         <input type="text" size=25 name="firstname" placeholder="First Name" required>
                         </div>
                         <div class="6u$">
                         <input type="text" size=25 name="lastname" placeholder="Last Name" required>
                         </div>
                            <div class="12u 12u$(xsmall)">
                             <h3>Gender</h3>
                          </div>

                         <div class="6u 12u$(xsmall)">
                         	<input type="radio" id="male" name="gender" value="m">
                         	<label for="male">Male</label>

                         	<input type="radio" id="female" name="gender" value="f">
                            <label for="female">Female</label>

                            <input type="radio" id="others" name="gender" value="o">
                            <label for="others">Others</label>
                         </div>
                         <div class="6u$">
                          <input type="text" size=25 name="email" placeholder="Email" required>
                         </div>
                         <div class="6u$">
                         <input type="Password" size=25 name="password"  placeholder="Password" required>
                         </div>
                         <div class="6u$">
                         <input type="number" class="form-control" id="number" name="number" placeholder="Phone Number" required>
                         </div>
                           <input type="Reset">
                     1<input type="submit" class= "button special" name="submit" value="Submit">


                    </form>
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

            <?php
 $conn = new mysqli('localhost','root','','LIMS');


if(isset($_POST['submit']))
{
   $firstname=$_POST['firstname'];
   $lastname=$_POST['lastname'];
   $gender=$_POST['gender'];
   $email=$_POST['email'];
   $password=$_POST['password'];
   $number=$_POST['number'];
  $query="insert into signup values('','".$firstname."','".$lastname."','".$gender."','".$email."','".$password."','".$number."')";
          if (mysqli_query($conn, $query)) {
   echo '<script>alert("Registered Sucessfully");</script>';
             header("Refresh:2;url=index.php");

} else {
    echo '<script> alert("ERROR ! Try Again Later")</script>';
     echo "Error: " . $query . "<br>" . $conn->error;
}
 $conn->close();
}
            ?>