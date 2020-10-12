<? php
$serverName="localhost";
$dbName="grand_&_epic";
$username="root";
$password="";
$con=mysqli_connect($serverName,$dbName,$username,$password);
if(!$con){
    die("Connection Failed:".mysqli_connect_error());
}

?>