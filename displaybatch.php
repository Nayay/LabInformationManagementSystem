
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
                       	<li> <?php echo "Welcome,"." "." ". $_SESSION['userid'] ;  ?></li>
                       	<li>  <a href="logout.php"> Logout</a></li>
                     </ul>
				</nav>
			</header>
    <body>
<!-- Main -->
        <section id="two" class="wrapper style2 ">
   					<div class="container">
                    <h2 style="float:left;">Batch Records</h2>
                    <a href="newbatch.php" class="button special icon fa-plus"  style="float:right;">Add New Sample Batch</a>

                   </div>
                <form name="displaybatch" method="post" action="">
                	<div class="table-wrapper" style="clear:both; width:94%; margin-left: 3%;">
               <table id="tOne" class="alt">
                      <tr><th> Batch Id</th>
                        <th>Received By</th>
                        <th>Site</th>
                        <th>Batch Name </th>
                        <th>COC Number </th>
                        <th>Client </th>
                        <th>Date/Time Received </th>
                        <th>PO Number </th>
                        <th>Project </th>
                        <th>Quote </th>
                        <th>Submitted By </th>
                        <th>Invoice To </th>
                        <th>Sample Type </th>
                        <th>Prep Code </th>
                        <th>Number of Samples </th>
                        <th>Containers </th>
                        <th>Status </th>
                        <th>Special Instructions </th>
                        <th>Report To </th>
                        <th>Selected Names </th>
                        <th>Add Package </th>
                        <th>Selected Packages </th>
                        <th>Add Flag </th>
                        <th>Selected Flags </th>
                        <th>Due Date </th>
                        <th>Shipper </th>
                        <th>Shipper Reference</th>
                    </tr>

<?php
   $conn = new mysqli('localhost','root','','LIMS');
  if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
  } else {

      $query="select * from newbatch";
      $result=mysqli_query($conn,$query);
      if ($result->num_rows > 0) {
      while($row=mysqli_fetch_array($result)){ echo "<tr><td>". $row["batchid"]. "</td><td>".$row["receivedby"]. "</td><td>".$row["site"]. "</td><td>".$row["batchname"]. "</td><td>".$row["cocnumber"]. "</td><td>".$row["client"]. "</td><td>".$row["datetimereceived"]. "</td><td>".$row["ponumber"]. "</td><td>".$row["project"]. "</td><td>".$row["quote"]. "</td><td>".$row["submittedby"]. "</td><td>".$row["invoiceto"]. "</td><td>".$row["sampletype"]. "</td><td>".$row["prepcode"]. "</td><td>".$row["noofsamples"]. "</td><td>".$row["containers"]. "</td><td>".$row["status"]. "</td><td>".$row["specialinstructions"]. "</td><td>".$row["reportto"]. "</td><td>".$row["selectednames"]. "</td><td>".$row["addpackage"]. "</td><td>".$row["selectedpackages"]. "</td><td>".$row["addflag"]. "</td><td>".$row["selectedflags"]. "</td><td>".$row["duedate"]. "</td><td>".$row["shipper"]. "</td><td>".$row["shipperreference"]. "</td>          </tr>";}
  }
 echo "</table>";
}
$conn->close();

?>

</table>
</div>
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


</body>
</html>

<style> 
 .table_wrapper{
    display: block;
    overflow-x: auto;
    white-space: nowrap;
    
}
</style>


