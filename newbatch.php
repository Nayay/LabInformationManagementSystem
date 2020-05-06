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
                       	<li> <a href="userdashboard.php"> Home</a></li>
                       	<li>   <?php echo "Welcome,"." "." ". $_SESSION['userid'] ;  ?></li>
                       	<li> <a href="logout.php"> Logout</a></li>
                     </ul>
				</nav>
			</header>
<!-- Main -->
        <section id="two" class="wrapper style2 ">
   					<div class="container">
                    <h2 style="float:left;">Sample Batch Form</h2>
                    <a href="displaybatch.php" class="button special icon fa-desktop" style="float:right;">Display Sample Batch</a>
                    </div>
        <form name="Sample" method="post">
            <table width="90%" style="margin-left:5%; ">

            <tr>
            <td>Received By:</td>
            <td><input type="text" size=25 name="receivedby" required placeholder="Enter received by"></td>
            <td></td>
            <td>Special Instructions:</td>
            <td rowspan="2"><input type="text" size=25  style="height: 80px" name="specialinstructions" placeholder="Enter Instructions" required></td>
            </tr>

            <tr>
            <td>Site:</td>
            <td>
            <select id="site" name="site" style="width: 140px">
              <option value="India">India</option>
              <option value="Canada">Canada</option>
              <option value="America">America</option>
            </select>
            </td>
            </tr>

            <tr>
            <td>Batch Name:</td>
            <td><input type="text" size=25 name="batchname" placeholder="Enter Batch Name" required></td>
            <td></td>
            <td>Report to:</td>
            <td>
            	<select id="Report" name="reportto" style="width: 140px">
              <option value="One">one</option>
              <option value="Two">two</option>
              <option value="Three">three</option>
            </select>
            </td>

            </tr>

            </tr>

            <td>COC Number:</td>
            <td><input type="text" size=25 name="cocnumber" placeholder="Enter COC Number" required></td>
            <td></td>
            <td></td>
            <td rowspan="2"><input type="text" size=25  style="height: 80px" name="selectednames" placeholder="List of selected names" required></td>

            </tr>

            <tr>
            <td>Client:</td>
            <td><select name="client" id="client" style="width: 140px" >
              <option value="Amit">Amit</option>
              <option value="Harry">Harry</option>
              <option value="David">David</option>
            </select></td>
            </tr>

            <td>Date / Time Received:</td>
            <td><input type="text" name="datetimereceived" style="width: 160px" size=25 name="date"></td>
            <td></td>
            <td>Add Package:</td>
            <td>
            	<select id="addpackage" name="addpackage" style="width: 140px">
              <option value="Pac_One">Pac_One</option>
              <option value="Pac_Two">Pac_Two</option>
              <option value="Pac_Three">Pac_Three</option>
            </select>
            </td>

            </tr>

            <td>PO Number:</td>
            <td>
            <select id="ponumber" name="ponumber" style="width: 140px" >
              <option value="One">One</option>
              <option value="Two">two</option>
              <option value="Three">three</option>
            </select></td>
            <td></td>
            <td></td>
            <td rowspan="2"><input type="text" size=25  style="height: 80px" name="selectedpackages" placeholder="List of selected packages" required></td>

            </tr>

            <td>Project:</td>
            <td>
            	<select id="project" name="project" style="width: 140px">
              <option value="P_One">P_One</option>
              <option value="P_Two">P_two</option>
              <option value="P_Three">P_three</option>
            </select></td>
            </td>
            </tr>

            <td>Quote:</td>
            <td>
            	<select id="quote" name="quote" style="width: 140px">
              <option value="Q_One">Q_One</option>
              <option value="Q_Two">Q_Two</option>
              <option value="Q_Three">Q_Three</option></select>
            </select></td>
            </td>
            <td></td>
            <td>Add Flag:</td>
            <td>
              <select id="addflag" name="addflag" style="width: 140px">
              <option value="F_One">F_One</option>
              <option value="F_Two">F_Two</option>
              <option value="F_Three">F_Three</option>
            </select>
            </td>

            </tr>

            <td>Submitted by:</td>
            <td>
              <select id="submittedby" name="submittedby" style="width: 140px">
              <option value="S_One">S_One</option>
              <option value="S_Two">S_Two</option>
              <option value="S_Three">S_Three</option></select>
            </td>
            <td></td>
            <td></td>
            <td rowspan="2"><input type="text" size=25  style="height: 80px" name="selectedflags" placeholder="List of selected flags" required></td>

            </tr>

            <td>Invoice To:</td>
            <td>
            <select id="invoiceto" name="invoiceto" style="width: 140px">
              <option value="StOne">One</option>
              <option value="StTwo">two</option>
              <option value="StThree">three</option></select>
            </td>
            </td>
            </tr>

            <td>Sample Type:</td>
            <td>
            	<select id="sampletype" name="sampletype" style="width: 140px">
              <option value="St_One">One</option>
              <option value="St_Two">two</option>
              <option value="St_Three">three</option></select>
            </td>
            </tr>

            <td>Prep Code:</td>
            <td>
            	<select id="prepcode" name="prepcode" style="width: 140px">
              <option value="Pr_One">Pr_One</option>
              <option value="Pr_Two">Pr_two</option>
              <option value="Pr_Three">Pr_three</option></select>
            </td>
            <td></td>
            <td>Due Date:</td>
            <td colspan="2"><input type="text" size=25 style="width: 160px" name="duedate" ></td>
            <td></td>
            </tr>

            <td>No of Samples:</td>
            <td><input type="text" size=25 name="noofsamples" placeholder="Enter No of Samples" required></td>
            </tr>

            <td>Containers:</td>
            <td><input type="text" size=25 name="containers" placeholder="Enter Numberof Containers" required></td>
            <td></td>
            <td>Shipper:</td>
            <td>
            	<select id="shipper" name="shipper" style="width: 140px">
              <option value="S_One">S_One</option>
              <option value="S_Two">S_two</option>
              <option value="S_Three">S_three</option></select>
            </td>
            </tr>

            <td>Status:</td>
            <td>
            	<select id="status" name="status" style="width: 140px">
              <option value="S_One">S_one</option>
              <option value="S_Two">S_two</option>
              <option value="S_Three">S_three</option></select>
            </td>

            <td></td>
            <td>Shipper Reference:</td>
            <td><input type="text" size=25 name="shipperreference" placeholder="Shipper Reference" required></td>
            </tr>
            </tr>
            <tr>

            <td colspan="6" align="center"><input type="submit" class= "button special" name="submit" value="Create Sample Batch"></td>
            </tr>

            </table>
        </form>

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

            <main>
                
            <section >

</section>
</main>



</body>
</html>
 <?php
 $conn = new mysqli('localhost','root','','LIMS');


if(isset($_POST['submit']))
{
   $receivedby=$_POST['receivedby'];
   $site=$_POST['site'];
   $batchname=$_POST['batchname'];
   $cocnumber=$_POST['cocnumber'];
   $client=$_POST['client'];
   $datetimereceived=$_POST['datetimereceived'];
   $ponumber=$_POST['ponumber'];
   $project=$_POST['project'];
   $quote=$_POST['quote'];
   $submittedby=$_POST['submittedby'];
   $invoiceto=$_POST['invoiceto'];
   $sampletype=$_POST['sampletype'];
   $prepcode=$_POST['prepcode'];
   $noofsamples=$_POST['noofsamples'];
   $containers=$_POST['containers'];
   $status=$_POST['status'];
   $specialinstructions=$_POST['specialinstructions'];
   $reportto=$_POST['reportto'];
   $selectednames=$_POST['selectednames'];
   $addpackage=$_POST['addpackage'];
   $selectedpackages=$_POST['selectedpackages'];
   $addflag=$_POST['addflag'];
   $selectedflags=$_POST['selectedflags'];
$duedate=$_POST['duedate'];
$shipper=$_POST['shipper'];
$shipperreference=$_POST['shipperreference'];
  $query="insert into newbatch values('','".$receivedby."','".$site."','".$batchname."','".$cocnumber."','".$client."','".$datetimereceived."','".$ponumber."','".$project."','".$quote."','".$submittedby."','".$invoiceto."','".$sampletype."','".$prepcode."','".$noofsamples."','".$containers."','".$status."','".$specialinstructions."','".$reportto."','".$selectednames."','".$addpackage."','".$selectedpackages."','".$addflag."','".$selectedflags."','".$duedate."','".$shipper."','".$shipperreference."')";
          if (mysqli_query($conn, $query)) {
   echo '<script>alert("Registered Sucessfully");
   
              window.location.href="userdashboard.php";
   </script>';
             
    
} else {
    echo '<script> alert("ERROR ! Try Again Later")</script>';
     echo "Error: " . $query . "<br>" . $conn->error;
}
 $conn->close();
}
            ?>