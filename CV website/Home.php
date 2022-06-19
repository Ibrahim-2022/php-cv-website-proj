<?php
$title = 'Home';
include('inc/header.php');
// connect with db code exist inside connect.php that is included in header.php
$query = 'select * from user where id = 1';
$result = mysqli_query($dbc, $query);
mysqli_close($dbc); 
?>
<section class="person-info">
        <div class="container">
            <h1 class="title">Personal Information</h1>
            <div class="person-main">    
                <table>
                    <tbody>
                        <?php
                            while($rows = mysqli_fetch_assoc($result))
                            {
                        ?>
                        <tr>
                            <td>Full Name:</td>
                            <td><?= $rows['full_name'] ?></td>
                        </tr>
                        <tr>
                            <td>Gender:</td>
                            <td><?= $rows['gender'] ?></td>
                        </tr>
                        <tr>
                            <td>Birth Date:</td>
                            <td><?= $rows['birth_date'] ?></td>
                            <!-- <td>9<sup>th</sup>, Jan 2002</td> -->
                        </tr>
                        <tr>
                            <td>Nationality:</td>
                            <td><?= $rows['nationality'] ?></td>
                        </tr>
                        <tr>
                            <td>Place of Pirth:</td>
                            <td><?= $rows['birth_place'] ?></td>
                        </tr>
                        <tr>
                            <td>Job title:</td>
                            <td><?= $rows['job'] ?></td>
                        </tr>
                        <tr>
                            <td>Year of Experience:</td>
                            <td><?= $rows['experience'] ?></td>
                        </tr>
                    </tbody>
                </table>    
                <img src="<?= $rows['image'] ?>" alt="">
                <?php 
                    } 
                ?>
            </div>
        </div>
    </section>
<?php include ('inc/footer.php') ?>