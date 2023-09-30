<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname ="digial_marketing";
$con = mysqli_connect($server, $username , $password, $dbname);
if(!$con)
{
    die("Connection is Failed due to".mysqli_connect_error());

}
$name = $_POST['name'];
$email = $_POST['email'];
$pnumber = $_POST['pnumber'];
$sql = "INSERT INTO contact (name, email , pnumber) VALUES ('$name', '$email', '$pnumber');";
if(mysqli_query($con, $sql))
{
   echo"<h1> Data Stored in Database Successfully..</h1>";
}
else{
    echo"ERROR:".mysqli_error($con);
}
mysqli_close($con);
?>
