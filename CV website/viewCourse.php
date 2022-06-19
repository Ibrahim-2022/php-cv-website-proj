<?php
$title = 'Courses';
include('inc/header.php');
include('inc/style.php');

$query = 'select * from courses';
$result = mysqli_query($dbc, $query);
mysqli_close($dbc);
?>
<section class="course-info">
      <div class="container">
        <h1 class="title">All Cources Information</h1>
        <div class="course-main">
          <table>
            <thead>
              <tr>
                <th rowspan="2">#</th>
                <th rowspan="2">Course Name</th>
                <th rowspan="2">Total Hours</th>
                <th colspan="2">Date</th>
                <th rowspan="2">Institution</th>
                <th rowspan="2">Attachment</th>
                <th rowspan="2">Note</th>
              </tr>
              <tr>
                <th>From</th>
                <th>To</th>
              </tr>
            </thead>
            <tbody>
              <?php
                while($row = mysqli_fetch_assoc($result))
                {
              ?>
              <tr>
                <td><?= $row['course_id'] ?></td>
                <td><?= $row['course_name'] ?></td>
                <td><?= $row['hours_number'] ?></td>
                <td><?= $row['start'] ?></td>
                <td><?= $row['end'] ?></td>
                <td><?= $row['institution'] ?></td>
                <td><a href="courseView.php">View</a></td>
                <td>
                  <p><?= $row['notes'] ?></p>
                </td>
              </tr>
              <?php 
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </section>
<?php include ('inc/footer.php') ?>