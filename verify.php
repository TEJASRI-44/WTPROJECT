<?php
$con = mysqli_connect("localhost", "myadmin", "Tejasri@44!22", "hello",3306);

if ($con) {
    //echo "Connection successful";
} else {
    die("Connection failed: " . mysqli_connect_error());
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username =$_POST["username"];
    $password = $_POST["voterno"];
    $sql="SELECT * FROM `votersinfo` WHERE votername='$username' and voterId='$password' and votingstatus='notvoted'";
    $result=mysqli_query($con,$sql);
    


    if (mysqli_num_rows($result)>0) {
        // Successful verification, redirect to details page
        header("Location: details.php");
        $stmt="UPDATE  `votersinfo` SET votingstatus='voted' WHERE votername='$username' and voterId='$password'";
        $res=mysqli_query($con,$stmt);
        exit();
    } else {
        echo"<script>
        alert('Voter already voted');
        </script>";
        header("Location: index.php?error=1");
        exit();
    }
} else {
    // Redirect back to login page if accessed directly
    header("Location: index.php");
    exit();
}
?>
