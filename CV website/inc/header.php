<?php 
// include DB connection..
require('inc/connect.php');
//Handling with (active li) Using php!!
$activePage = basename($_SERVER['PHP_SELF'], ".php");
/*
$_SERVER['PHP_SELF']  return path of this php script --> ex: /home.php
to optain filename from the path I USE    basesname 
basename($_SERVER['PHP_SELF'] --> ex: home.php
basename($_SERVER['PHP_SELF'], ".php"); --> ex: home
*/
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/Mystyle.css" />
    <title><?php echo $title?></title>
  </head>
  <body>
    <nav>
      <ul>  
        <li class="<?php echo ($activePage == 'home') ? 'active':''; ?>"><a href="home.php">Personal Information</a></li>
        <li class="<?php echo ($activePage == 'viewCourse') ? 'active':''; ?>"><a href="viewCourse.php">Courses Information</a></li>
        <li class="<?php echo ($activePage == 'viewExperience') ? 'active':''; ?>"><a href="viewExperience.php">Experiences Information</a></li>
        <li class="<?php echo ($activePage == 'addCourse') ? 'active':''; ?>"><a href="addCourse.php">Add Course</a></li>
        <li class="<?php echo ($activePage == 'addExperience') ? 'active':''; ?>"><a href="addExperience.php">Add Experience</a></li>
      </ul>   
      <div class="logo">
        <img src="images/Logo_White.png" alt="" />
      </div>
      <div class="clear"></div>
    </nav>
<?php 
// NOTE::
// <?= shorthand for <?php echo 
?>
