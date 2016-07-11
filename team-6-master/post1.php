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
$dt = new DateTime();
$dt1=$dt->format('Y-m-d H:i:s');
$sql="insert into rangde_cfg.comments (name,date,cmn) values ('".$name."','".$dt1."','".$cmn."')";
if(!mysqli_query($conn,$sql))
{
	echo 'Error';
}
mysqli_close($conn);
?>
<h1 align="center">Comment posted!</h1>
</body>
</html>