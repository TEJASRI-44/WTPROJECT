<?php
$con = mysqli_connect("localhost", "myadmin", "Tejasri@44!22", "hello",3306);

if ($con) {
    //echo "Connection successful";
} else {
    die("Connection failed: " . mysqli_connect_error());
}

$consti=$_POST["const"];
$won=$_POST["won"];

$sql="UPDATE votingsystem SET $won=$won+1 WHERE constitution='$consti'";
$result=mysqli_query($con,$sql);
if($result){
    echo'<script>
    alert("vote recorded successfully");
    </script>';
    header("Location:confirmation.php");
    exit();
}

?>