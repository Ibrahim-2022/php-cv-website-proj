<?php
$title = 'attachment';
include('inc/header.php');

$query = "select * from courses where course_id = 22";
$result = mysqli_query($dbc, $query);
mysqli_close($dbc);

?>
<section class="view-attachment">
    <div class="container">
        <?php  
            while($row = mysqli_fetch_assoc($result))
            {
        ?>
        <h1 class="title">Course "<?= $row['course_name'] ?>"</h1>
        <p>from <?= $row['start'] ?> to <?= $row['end'] ?>, totally <?= $row['hours_number'] ?> traning hours</p>
        <p>Institution was "<?= $row['institution'] ?>"</p>
        <?php
            }
        ?>
    </div>
    <img src="images/cirtification.png" alt="">
</section>
<?php include('inc/footer.php');
