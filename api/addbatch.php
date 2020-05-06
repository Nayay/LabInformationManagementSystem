 

            <?php
 $conn = new mysqli('localhost','root','','LIMS4');
// json response array
$response = array("error" => FALSE);
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
 $noofsamples=$_POST['noofsample'];
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

 if ($_SERVER['REQUEST_METHOD']=='POST') {
   
    $query="insert into newbatch values('','".$receivedby."','".$site."','".$batchname."','".$cocnumber."',
    '".$client."','".$datetimereceived."','".$ponumber."','".$project."','".$quote."','".$submittedby."',
    '".$invoiceto."','".$sampletype."','".$prepcode."','".$noofsamples."','".$containers."','".$status."',
    '".$specialinstructions."','".$reportto."','".$selectednames."','".$addpackage."','".$selectedpackages."',
    '".$addflag."','".$selectedflags."','".$duedate."','".$shipper."','".$shipperreference."')";
          if (mysqli_query($conn, $query)) {
            
              // use is found
        $response["error"] = FALSE;
        $response["message"] = "No error";
       
        echo json_encode($response);
          
          
          }else
          {
       // use is found
       $response["error"] = TRUE;
       $response["message"]="Invalid data";
       echo json_encode($response);
          }

}else{
  // required post params is missing
  $response["error"] = TRUE;
  $response["error_msg"] = "Required parameters email or password is missing!";
  echo json_encode($response);
}
            ?>