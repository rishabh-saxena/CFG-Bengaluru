<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
$server = 'localhost';
$username   = 'root';
$password   = 'password';
$database   = 'rangde_cfg';
$conn=mysqli_connect($server, $username,  $password);
if(!$conn)
{
    exit('Error: could not establish database connection');
}
$name=$_REQUEST["name"];
$cmn=$_REQUEST["cmn"];
$d=new date("Y-M-D h:i:sa");
$sql="insert into rangde_cfg.categories (name,date,cmn) values ('".$name."','".$d."','".$cmn."')";
if(!mysqli_query($conn,$sql))
{
	echo 'Error';
}
mysqli_close($conn);
?>
<h1 align="center">Comment poste!</h1>
</body>
</html>