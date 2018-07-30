<?php
include "config.php";
$sqladv="select * from `table` order by `COL 1` asc ";
$smtadv=$pdo->prepare($sqladv);
$smtadv->execute();
$row=$smtadv->fetchAll();
 ?>
<html lang = "en">
<head>
	<link rel="stylesheet" href="/static/ex.css">
	<link rel="stylesheet" href="/static/demo.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
	<title>AnimeList</title>
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
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Animelist.php">AnimeList</a>

	  </li>

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
    <table class="table table-striped table-bordered table-hover" style="margin-top: 70px;">
      <tr>
        <th width = "20">anime_id</th>
        <th width = "70">title</th>
		<th width = "80">image</th>
        <th width = "30">score</th>
        <th width = "80">genre</th>
      </tr>
      <?php foreach ($row as $k=>$r) {
          if($k>=1){
       ?>
      <tr>
        <td><?php echo "<p> <font face = 'Verdana' size = '8pt'> {$r['COL 1']} </font></p>" ?></td>
        <td><?php echo "<p> <font face = 'Verdana' size = '6pt'> {$r['COL 2']} </font></p>" ?></td>
		<td><img src= "<?php echo $r['COL 16'];?>" width = "90" height = "150"></td>
        <td><?php echo "<p> <font face = 'Verdana' size = '8pt'> {$r['COL 7']} </font></p>" ?></td>
        <td><?php echo "<p> <font face = 'Verdana' size = '3pt'> {$r['COL 14']} </font></p>" ?></td>
      </tr>
      <?php }} ?>
    </table>
