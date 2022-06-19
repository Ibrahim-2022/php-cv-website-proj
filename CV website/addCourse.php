<?php
$title = 'Add Course';
include('inc/header.php');
if (isset($_POST['submit'])){  

  $course_name = $_POST['course_name']; 
  $hours_number = $_POST['hours_number'];
  $start = $_POST['start'];
  $end = $_POST['end'];
  $institution = $_POST['institution'];
  $url = $_POST['url'];
  $notes = $_POST['notes'];

  $target_dir = "uploads/";
  $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
  $uploadOk = 1;
  $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));


  // Check if file already exists
  if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
  }

  // Check file size
  if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
  }

  // Allow certain file formats
  if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
  }

  // Check if $uploadOk is set to 0 by an error
  if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
  } else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
      // echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
    } else {
      echo "Sorry, there was an error uploading your file.";
    }
  }

  $query = "INSERT INTO `courses`(`course_name`, `hours_number`, `start`, `end`, `institution`, `url`, `notes`, `file`) 
  VALUES ('$course_name', '$hours_number','$start', '$end', '$institution', '$url', '$notes', '$target_file')";

  if (mysqli_query($dbc, $query)) {
    // echo "New record created successfully";
  } else {
    echo "Error: " . $query . "<br>" . mysqli_error($dbc);
  }

  mysqli_close($dbc);
}
?>
<section class="add-course add-exp">
      <div class="container">
        <form id="myForm" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" enctype="multipart/form-data">
          <table>
            <tbody>
              <tr>
                <td><label for="course_name">Course Name</label></td>
                <td><input type="text" id="course_name" name="course_name" /></td>
              </tr>
              <tr>
                <td><label for="hours_number">Number of Hours</label></td>
                <td>
                  <input type="number" id="hours_number" name="hours_number" />
                </td>
              </tr>
              <tr>
                <td><label for="start">Start Month</label></td>
                <td><input type="date" id="start" name="start" /></td>
              </tr>
              <tr>
                <td><label for="end">End Month</label></td>
                <td><input type="date" id="end" name="end" /></td>
              </tr>
              <tr>
                <td><label for="institution">Institution</label></td>
                <td>
                  <input type="text" id="institution" name="institution" />
                </td>
              </tr>
              <tr>
                <td><label for="attachment">Attachment</label></td>
                <td>
                  <input
                    type="radio"
                    id="attachment"
                    name="attachment"
                    value="file"
                  />
                  File
                  <input
                    type="radio"
                    id="attachment"
                    name="attachment"
                    value="url"
                  />
                  URL
                </td>
              </tr>
              <tr>
                <td><label for="url">URL</label></td>
                <td><input type="url" id="url" name="url"/></td>
              </tr>
              <tr>
                <td><label for="fileToUpload">File</label></td>
                <td><input type="file" id="fileToUpload" name="fileToUpload" /></td>
              </tr>
              <tr>
                <td><label for="notes">Notes</label></td>
                <td><textarea name="notes" id="notes"></textarea></td>
              </tr>
            </tbody>
          </table>
          <div class="foot">
            <input type="submit" value="Save" name="submit"/>
            <input type="button" onclick="myFunction()" value="Reset" />
          </div>
        </form>
        <img src="images/addCourse-img.png" alt="" />
      </div>
    </section>
<?php include ('inc/footer.php') ?>
<script>
  function myFunction(){
    document.getElementById("myForm").reset();
  }
</script>