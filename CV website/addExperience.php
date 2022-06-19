<?php
$title = 'Add Experience';
include('inc/header.php');

if (isset($_POST['submit'])){  

  $excperience_category = $_POST['excperience_category']; 
  $excperience_title = $_POST['excperience_title'];
  $start = $_POST['start'];
  $end = $_POST['end'];
  $institution = $_POST['institution'];
  $description = $_POST['description'];

  $query = "INSERT INTO `experiences`(`excperience_category`, `excperience_title`, `start`, `end`, `institution`, `description`) 
  VALUES ('$excperience_category', '$excperience_title','$start', '$end', '$institution', '$description')";

  if (mysqli_query($dbc, $query)) {
    // echo "New record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($dbc);
  }

  mysqli_close($dbc);
}
?>
<section class="add-exp">
      <div class="container">
        <form id="myForm" method="post" action="<?php $_SERVER['PHP_SELF']?>">
          <table>
            <tbody>
              <tr>
                <td><label for="excperience_category">Experiences Category</label></td>
                <td>
                  <select name="excperience_category" id="excperience_category">
                    <option value=""></option>
                    <option value="">Frontend web development</option>
                    <option value="">Backend web development</option>
                    <option value="">Mopile application development</option>
                  </select>
                </td>
              </tr>
              <tr>
                <td><label for="">Experience Title</label></td>
                <td><input type="text" name="excperience_title" id="excperience_title"/></td>
              </tr>
              <tr>
                <td><label for="start">Start Month</label></td>
                <td><input type="date" name="start" id="start" /></td>
              </tr>
              <tr>
                <td><label for="end">End Month</label></td>
                <td><input type="date" name="end" id="end" /></td>
              </tr>
              <tr>
                <td><label for="institution">Institution</label></td>
                <td><input type="text" name="institution" id="institution" /></td>
              </tr>
              <tr>
                <td><label for="description">Description</label></td>
                <td><textarea name="description" id="description"></textarea></td>
              </tr>
            </tbody>
          </table>
          <div class="foot">
            <input type="submit" value="Save" name="submit" />
            <input type="button" onclick="myFunction()" value="Reset" />
          </div>
        </form>
        <img src="images/exp-img.jpg" alt="" />
      </div>
    </section>
<?php include ('inc/footer.php') ?>
<script>
  function myFunction(){
    document.getElementById("myForm").reset();
  }
</script>