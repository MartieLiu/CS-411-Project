<?php
include "config.php";
$genre=$_POST['genre']?$_POST['genre']:'';
$rating=$_POST['rating']?$_POST['rating']:'';
$title=$_POST['title']?$_POST['title']:'';
$anime_id=$_POST['anime_id']?$_POST['anime_id']:'';
if($genre && $rating && $title && $anime_id){
  $sqladv="insert into `table`(`COL 1`,`COL 2`,`COL 3`,`COL 4`) values('$anime_id','$title','$rating','$genre')";
  $smtadv=$pdo->prepare($sqladv);
  if($smtadv->execute())
    echo "<script>alert('Successfully Added!')</script>";
}
 ?>

<html lang = "en">
<head>
	<link rel="stylesheet" href="/static/ex.css">
	<link rel="stylesheet" href="/static/demo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<title>Insert</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
	<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="index.php">Bobo Tea</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
	<li class="nav-item">
    <a class="nav-link" href="Animelist.php">AnimeList</a>

  </li>
	<li class="nav-item">
    <a class="nav-link" href="Search.php">Search</a>

  </li>

  <li class="nav-item">
    <a class="nav-link" href="Insert.php">Insert</a>

  </li>
  <li class="nav-item">
    <a class="nav-link" href="Update.php">Update</a>

  </li>
  <li class="nav-item">
    <a class="nav-link" href="Delete.php">Delete</a>
  </li>
	
</ul>
<form class="form-inline my-2 my-lg-0">
  <input class="form-control mr-sm-2" type="text" placeholder="UNDER CONSTRUCTION" aria-label="Search">
  <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
</form>
</div>
</nav>


<!DOCTYPE html>
<html>
<body>
<br>
<br>
<br>
<br>
<br>
<br>

<h2>Text Input</h2>

      	<form action = "insert.php" method="POST">
          anime_id: <br>
          <input type="text" name="anime_id">
         <br>
         title: <br>
          <input type="text" name="title">
         <br>
         Genre:<br>
         <input type="text" name="genre">
         <br>
	       Rating:<br>
	       <input type="text" name="rating" value="<?php echo $rating ?>"><br><br>
	       <input type="submit" value="Insert">
	       <br>
	       </form>
         <p>Note that the form itself is not visible.</p>

</body>
</html>
