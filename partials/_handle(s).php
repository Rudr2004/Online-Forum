<?php
$showAlert = "false";
if($_SERVER["REQUEST_METHOD"] == "POST"){
$servername = "localhost";
$username = "root";
$password = "";
$databasename = "rdiscuss";

$conn = mysqli_connect("localhost", "root","");
if(!$conn){
    die("Error to connect".mysql_error());
}
mysqli_select_db($conn,"rdiscuss");


$email = $_POST['signupEmail'];
$password = $_POST['signupPassword'];
$cpassword = $_POST['signupCpassword'];
           
//Check weather this email exist or not

$existsql = "SELECT * FROM `users` WHERE email = '$email' ";
$result = mysqli_query($conn,$existsql);
$numRows = mysqli_num_rows($result);

if($numRows > 0){
    echo "Email already eixst";
}
else{
    if($password == $cpassword){
        $password = password_hash($password,PASSWORD_DEFAULT);
        $sql = "INSERT INTO `users` (`email`, `password`, `timestamp`) VALUES ( '$email', '$password', current_timestamp());";
        $result = mysqli_query($conn,$sql);
            header("location: http://localhost/forum/index.php?signupstatus=true");
            exit();
    }
    else{
        $showAlert = "Password do not match";
    }
}
header("location: http://localhost/forum/index.php?signupstatus=false ");     
}
?>
