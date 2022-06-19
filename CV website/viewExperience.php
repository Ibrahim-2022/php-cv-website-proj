<?php
$title = 'Excperiences';
include('inc/header.php');

$query = 'select * from experiences';
$result = mysqli_query($dbc, $query);
mysqli_close($dbc);
?>
<section class="exp-info">
      <div class="container">
        <h1 class="title">All Experiences Information</h1>
        <article>
          <?php
            while($row = mysqli_fetch_assoc($result))
            {
          ?>
          <h3><?= $row['excperience_category']?><span><?php echo $row['institution'].'/'. $row['excperience_title'] ?></span></h3>          
          <h5>from <?= $row['start']?> to <?= $row['end']?></h5>
          <p><?= $row['description']?></p>
          <?php
            }
          ?>
        </article>
      </div>
    </section>
<?php include ('inc/footer.php') ?>