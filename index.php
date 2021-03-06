<?php
session_start();
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Dots & Dashes</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
  <link href="font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <link href="css/main.css" rel="stylesheet" >
  <link href="css/m_main.css" rel="stylesheet" >
</head>
<body>

<nav class="navbar">
  <div class="container-fluid nav_div ">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">DOTS N DASHES</a>
      <div class="search form-group">

        <input type="text" class="form-control search_bar" name="search" placeholder="Search..">
        <i class="fa fa-search fa-2x" aria-hidden="true" ></i>
        <i class="fa fa-bars fa-2x" aria-hidden="true"></i>
        <ul class="search_result">
        </ul>

      </div>

    </div>
    <ul class="nav navbar-nav m_nav">
    <!--  <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"></a></li>
          <li><a href="#">Jquery</a></li>
        </ul>
      </li>-->
      <li><a href="#">Javascript</a></li>
      <li><a href="#">Jquery</a></li>
      <li><a href="#">Require.js</a></li>
    </ul>
  </div>
</nav>

<div class="container">
  <div class="row">
    <div class="col-md-12 ">
      <h3 class="body_title">Home Page</h3>

    </div>
    <?php
    $result=mysqli_query($con,"select * from articles");
    while($rows=mysqli_fetch_assoc($result))
    {
      echo "<a class='article_link' href=../blog".$rows["path"].">
            <div class='col-lg-4 col-md-3 col-sm-4 article'>
            <span class='article_cat'>".$rows["module"]."</span>
            <h3 class='article_title'>".$rows["name"]."</h3>
            <h4>".$rows["description"]."</h4>

          </div>
          </a>";
    }
    ?>
</div>
<script type="text/javascript" src="js/require.js"></script>
<script type="text/javascript" src="js/config.js"></script>
<script>require(['AB']);</script>
</body>
</html>
