<?php
$server="localhost";
$username="root";//THE DEFAULT USERNAME OF THE DATABASE
$password="";
$dbname="espdemo";
$con=mysqli_connect($server,$username,$password,$dbname) or die("unable to connect");

if(isset($_GET['sendval'])){

$rank=$_GET['sendval'];

$sql="SELECT name from class where rank=$rank";//WE ARE TRYING TO GET THE NAME OF THE STUDENT BY ENTERING THE RANK
$result=mysqli_query($con,$sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {    
        echo  $row["name"];
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    something that you can't imagine
</body>
</html>