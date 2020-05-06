<html>
    <head>
    		<title>LIMS</title>
    		<meta charset="utf-8" />

    		<meta name="viewport" content="width=device-width, initial-scale=1" />
    		<link rel="stylesheet" href="assets/css/main.css" />
    	</head>
   <body class="landing">
   <!-- Header -->
   			<header id="header" class="alt">
   				<h1><strong><a href="index.php">LIMS</a></strong></h1>
   				<nav id="nav">
   					<ul>
   						<li> <a href="index.php"> Home</a></li>
   						<li> <a href="Sign_up.php"> Signup</a></li>
   						<li> <a href="contactUs.html"> Contact us </a></li>
   					</ul>
   				</nav>
   			</header>

   			<!-- Banner -->
            			<section id="banner">
            				<h2>LIMS</h2>
            				<p>Lab Information Management System <br /> </p>
            				<ul class="actions">
            					<li><a href="Sign_up.php" class="button special big">Get Started</a></li>
            				</ul>
            			</section>
   <!-- Two -->
   				<section id="two" class="wrapper style2 special">
   					<div class="container">

                     <h2>Login</h2>

   					 <form name="loginForm" method="post" action="">

                     <div class="6u$">
                      <input type="text" size=25 name="userid" placeholder="Username" required>
                     </div>
                     <div class="6u$">
                      <input type="Password" size=25 name="pwd" placeholder="Password" required>
                     </div>
                     <input type="Reset">
                     <input type="submit" class= "button special" name="user_submit" value="Login">
                    </table>
                    </form>
                    </div>

   				</section>





<script language="javascript">
function check(form)
{

if(form.userid.value == "nayay" && form.pwd.value == "nayay")
{
  return true;
  
}
else
{
  alert("Error Password or Username")
  return false;
}
}
</script>
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

 <? $conn = new mysqli('localhost','root','','LIMS');
  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } else {
     if(isset($_POST['user_submit'])) // submit button name
{
    $loginquery="select * from signup where email='".$_POST['userid']."' and password='". $_POST['pwd']."'";
    $loginresult= mysqli_query($conn, $loginquery);
     $logindetail= mysqli_fetch_array($loginresult);
     if($logindetail['email']==$_POST['userid'] && $logindetail['password']==$_POST['pwd'])
    {
        session_start();
        $_SESSION['user']=$logindetail['firstname'].' '.$logindetail['lastname'];
        $_SESSION['userid']=$logindetail['email'];
       // echo '<script>alert("'.$_SESSION['user'].'")</script>';
        header("Location:userdashboard.php");
    } else {
    echo '<script>alert("Email or Password is incorrect!!");</script>';
    }
  }
  }


            ?>