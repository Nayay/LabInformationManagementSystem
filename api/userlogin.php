 <?php 

 
//$db = new DB_Functions();
$conn = new mysqli('localhost','root','','LIMS4');
// json response array
$response = array("error" => FALSE);

if ($_SERVER['REQUEST_METHOD']=='POST') {

    // receiving the post params
   $email = $_POST['email'];
   $password = $_POST['password'];

    // get the user by email and password
   // $user = $db->getUserByEmailAndPassword($email, $password);
 $loginquery="select * from signup where email='".$email."' and password='". $password."'";
    $loginresult= mysqli_query($conn, $loginquery);
     $logindetail= mysqli_fetch_array($loginresult);
    if ($logindetail['email']==$email && $logindetail['password']==$password) {
        // use is found
        $response["error"] = FALSE;
        $response["error_msg"] = "No error, User is found!";
        $response['username']= $logindetail['email'];
        echo json_encode($response);
    } else {
        // user is not found with the credentials
        $response["error"] = TRUE;
        $response['message']="Please Enter valid Email or Password";
        $response["error_msg"] = "Login credentials are wrong. Please try again! Or maybe you did not register yet!";
        echo json_encode($response);
    }
} else {
    // required post params is missing
    $response["error"] = TRUE;
    $response["error_msg"] = "Required parameters email or password is missing!";
    echo json_encode($response);
}


 ?>
