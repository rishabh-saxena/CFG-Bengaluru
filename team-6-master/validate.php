<?php
include 'connect.php';
session_start();
$sql = "SELECT uname,pass FROM login where uname='".$_POST['name']."' and pass='".$_POST['pass']."';";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        if(($_POST['name']==$row['uname'])&&($_POST['pass']==$row['pass'])){
            $_SESSION['uname'] = $_POST['name'];
            $_SESSION['page']="welcome.php";
        header("location: index.php");
        echo "success";
        }
        else{
    $_SESSION['error']="please enter valid details";
    header("location: index.php");
}
    }
}
?>