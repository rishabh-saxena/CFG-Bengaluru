<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<?php
session_start();
echo '<h1 align="center">RangDe for newbees</h1><br>';
$server = 'localhost';
$username   = 'root';
$password   = 'password';
$database   = 'rangde_cfg';
$conn=mysqli_connect($server, $username,  $password);
if(!mysqli_query($conn,$sql))
{
	echo 'Error';
}     
if(!$conn)
{
    exit('Error: could not establish database connection');
}
$sql = 'SELECT id,
            name,
            date,
            cmn
        FROM
            rangde_cfg.comments';
 
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
      
        echo '<br><table border="1" class="table table-striped">
              <tr>
                <th>Name</th>
                <th>Date</th>
                <th>Comment</th>
              </tr>'; 
             
        while($row = mysqli_fetch_assoc($result))
        {               
            echo '<tr>';
            echo '<td>'.$row['name'].'</td>';
            echo '<td>'.$row['date'].'</td>';
            echo '<td>'.$row['cmn'].'</td>';
            echo '</tr>';
        }
    }
}
session_destroy();
?>

<div class="col-lg-11">
    <h2 align="center">Your comments</h2><br>
    <center><form method="post" action="post1.php">   
    <label>Name</label>
    <input type="text" name="name" class="form-control"><br>
     <label>Comments</label>
      <textarea class="form-control" rows="5" id="comment" name="cmn"></textarea><br></center>
    <center><input type="submit" value="Add" class="btn btn-primary"></center>
    <br>
        </form>
        </div>
</body>
</html>