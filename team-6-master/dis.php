
<html>
<head>
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
</head>
<body>
<h1 align="center">Discussion Group</h1>
<ul class="list-group" align="center">
  <li class="list-group-item list-group-item-info"><a class="item" href="#">Home</a></li>
  <li class="list-group-item list-group-item-success"><a class="item" href="create_cat.php">Create a category</a></li>
</ul>  
<?php
session_start();
$server = 'localhost';
$username   = 'root';
$password   = 'password';
$database   = 'rangde_cfg';

$conn =  mysqli_connect($server, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
if(!$conn)
{
    exit('Error: could not establish database connection');
}
if(!mysqli_select_db($conn,$database))
{
    exit('Error: could not select the database');
}
$sql = 'SELECT
            id,
            cname,
            cdesc
        FROM
            rangde_cfg.categories';
 
$result = mysqli_query($conn,$sql);
 
if(!$result)
{
	 
    echo 'The categories could not be displayed, please try again later.';
}
else
{
    if(mysqli_num_rows($result) == 0)
    {
        echo 'No categories defined yet.';
    }
    else
    {
        //prepare the table
        echo '<h2 align="center">Categories</h2><br>';
        echo '<table border="1" class="table table-striped">
              <tr>
                <th>ID</th>
                <th>Category name</th>
                <th>Category description</th>
              </tr>'; 
           $d=0;
        while($row = mysqli_fetch_assoc($result))
        {   
             $d++;
          if($row['id']>1)
          {
          echo '<tr>';
      $id=$row['id']-2;
            echo '<td>'.$id.'</td>';
            $_SESSION["cname"] = $row['cname'];
            $name=$row['cname'];
            $link= "comm".$d.".php";
            echo "<td><a href='".$link."'>".$name."</a></td>";
            echo '<td>'.$row['cdesc'].'</td>';
            echo '</tr>';
        }
        else
        {
          echo '<tr>';
      $id=$row['id'];
            echo '<td>'.$id.'</td>';
            $_SESSION["cname"] = $row['cname'];
            $name=$row['cname'];
            $link= "comm".$d.".php";
            echo "<td><a href='".$link."'>".$name."</a></td>";
            echo '<td>'.$row['cdesc'].'</td>';
            echo '</tr>';
        }	
        }
    }
}
 
?>
</body>
</html>


