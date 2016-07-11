<html>
<head>
<link href="css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div>
    <div class="col-lg-11">
    <h2 align="center">Add A New Category</h2><br>
    <center><form method="post" action="cat.php">   
    <label>Name</label>
    <input type="text" name="name" class="form-control"><br>
    <label>E-mail</label>
    <input type="email" name="email" class="form-control"><br>
    <label>Category name</label>
    <input type="text" name="catname" class="form-control"><br>
     <label>Category description</label>
      <textarea class="form-control" rows="5" id="comment" name="catdesc"></textarea><br></center>
    <center><input type="submit" value="Add" class="btn btn-primary"></center>
    
        </form>
        </div>
</div>
</body>
</html>