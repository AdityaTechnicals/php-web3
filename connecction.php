<?php
$user = "root";
$pass="";
$host='localhost';
$db="restapi";
$con=mysqli_connect($host,$user,$pass,$db);
if($con){
    ?>
    <script>
        alert("connection successful")
    </script>
    <?php
}else{
    ?>
    <script>
    alert("connection unsuccessful")
    </script>
<?php
$conn=mysqli_connect_errno();
echo $conn; 

}
?>
