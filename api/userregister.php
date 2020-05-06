 

            <?php
 $conn = new mysqli('localhost','root','','LIMS4');

 $response = array("error" => FALSE);
 $firstname=$_POST['firstname'];
 $lastname=$_POST['lastname'];
 $gender=$_POST['gender'];
 $email=$_POST['email'];
 $password=$_POST['password'];
 $number=$_POST['number'];
 if ($_SERVER['REQUEST_METHOD']=='POST') {
   
  $query="insert into signup values('','".$firstname."','".$lastname."','".$gender."','".$email."','".$password."','".$number."')";
          if (mysqli_query($conn, $query)) {
            $response["error"] = FALSE;
            $response["error_msg"] = "No error, User is found!";
          
            echo json_encode($response);

} else {
  $response["error"] = TRUE;
  $response['message']="Please Enter valid Email or Password";
  $response["error_msg"] = "Login credentials are wrong. Please try again! Or maybe you did not register yet!";
  echo json_encode($response);
}
 $conn->close();
}else
{
   // required post params is missing
   $response["error"] = TRUE;
   $response["error_msg"] = "Required parameters email or password is missing!";
   echo json_encode($response);
}
            ?>