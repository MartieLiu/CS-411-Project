<?php
include "config.php";
$genre=$_POST['genre']?$_POST['genre']:'';
$rating=$_POST['rating']?$_POST['rating']:'';
if($genre && $rating){
  $sqladv="select * from `table` where `COL 3`='$rating' and `COL 4` like '%$genre%'";
  $smtadv=$pdo->prepare($sqladv);
  $smtadv->execute();
  $row=$smtadv->fetchAll();
}
 ?>

<html lang = "en">
<head>
	<link rel="stylesheet" href="/static/ex.css">
	<link rel="stylesheet" href="/static/demo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<title>Search</title>
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

      	<form action = "search.php" method="POST">
         Genre:<br>
  	     <input type="text" name="genre" value="<?php echo $genre ?>">
         <br>
	       Rating:<br>
	       <input type="text" name="rating" value="<?php echo $rating ?>"><br><br>
	       <input type="submit" value="Find">
	       <br>
	       </form>
         <p>
         </p>
         <div class="panel">
          <table class="table table-striped table-bordered table-hover" style="margin-top: 70px;">
            <?php if($genre){foreach ($row as $k=>$r) {
             ?>
            <tr>
              <td><?php echo $r['COL 1'] ?></td>
              <td><?php echo $r['COL 2'] ?></td>
              <td><?php echo $r['COL 3'] ?></td>
              <td><?php echo $r['COL 4'] ?></td>
            </tr>
            <?php }} ?>
          </table>
         </div>

</body>
</html>
