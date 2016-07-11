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
$email=$_REQUEST["email"];
$cname=$_REQUEST["catname"];
$cdesc=$_REQUEST["catdesc"];
$sql="insert into rangde_cfg.categories (name,email,cname,cdesc) values ('".$name."','".$email."','".$cname."','".$cdesc."')";
if(!mysqli_query($conn,$sql))
{
	echo 'Error';
}
mysqli_close($conn);
?>
<h1 align="center">Category added successfully</h1>
</body>
</html>