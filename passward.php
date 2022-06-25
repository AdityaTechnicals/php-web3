<?php
include 'connecction.php';
$id =$_GET['id'];
$del = "DELETE FROM `student_table` WHERE id =$id";
$rt= mysqli_query($con,$del);
if ($rt) {
    ?>
            <script>
                alert("deleted successfully")
            </script>
        <?php
        header('location : select.php');
        } else {
        ?>
            <script>
                alert("fuck you")
            </script>
        <?php
        }
    
    ?>

