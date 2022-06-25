<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/material-ui/5.0.0-beta.5/index.js" integrity="sha512-uKxirna7d5STmVXEMQYBVRW1nERrqHjwOubv4QcK4oYaaifLiEnN/aLIJxVsyK4R1K+awpNIG73RaQfT1DZ8ew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            background-color: #F7F9F9;
        }

        .best {
            height: 100vh;
            width: 100vw;
            position: relative;
        }

        .maindiv {
            height: 60vh;
            width: 60vw;
            background-color: #ECF0F1;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .vgh {
            width: 30%;
            height: 60vh;
            background-color: #138D75;
        }

        .hjk {
            width: 70%;
            height: 60vh;
            background-color: #E8F6F3;
        }

        .img {
            background-color: #138D75;

        }
        form{
            display: flex;
            flex-direction: column;
            margin-top: 25px;
            background-color:  important #E8F6F3 ;

        }
    </style>
</head>

<body>
    <div class="best">
        <div class="maindiv">
            <div class="row">
                <div class="col-lg-6 col-12 vgh">
                    <!-- imgdiv -->
                    <div class="img">
                        <figure class="ghi">
                            <img src="plk.png" alt="image" srcset="">
                            <figcaption class="heading" >welcome to infosol</figcaption>
                        </figure>
                        <a href="select.php">check your info</a>
                       
                    </div>
                </div>
                <div class="col-lg-6 col-12 hjk">
                    <h1 class="heading">please fill the form</h1>
                    <form action="<?php echo htmlentities($_SERVER['PHP_SELF'])?>" method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control"  name="name" id="exampleFormControlInput1" required>
                        </div>
                        <div class="mb-3">
                            <label for="Mobile" class="form-label">Mobile Number</label>
                            <input type="text" class="form-control"  name="phnum" id="exampleFormControlInput1" required>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control"  name="email" id="exampleFormControlInput1" required>
                        </div>
                        <div class="mb-3">
                            <label for="JOB POST" class="form-label">JOB POST </label>
                            <input type="text" class="form-control"  name="job" id="exampleFormControlInput1" required>


                        </div>
                        <div class="mb-3 mt-3">
                            
                            <input type="submit" class="btn btn-warning" name ="submit">
                        </div>
                    </form>

                </div>

            </div>
        </div>
    </div>
    <?php

    include 'connecction.php';
       if(isset($_POST['submit'])){
           $name=mysqli_real_escape_string( $con,$_POST['name']);
           $phnum=mysqli_real_escape_string( $con,$_POST['phnum']);
           $email=mysqli_real_escape_string( $con,$_POST['email']);
           $job=mysqli_real_escape_string( $con,$_POST['job']) ;
          $pass=password_hash($job,PASSWORD_ARGON2I);
           $inset="INSERT INTO `student_table`( `Name`, `email`, `mobile`, `password`)  VALUES ('$name','$email','$phnum','$job')";
          $gho =mysqli_query($con,$inset);
          if($gho){
            ?>
            <script>
                alert("data send successfully")
            </script>
            <?php
          }else{
            ?>
            <script>
                alert("fuck you")
            </script>
            <?php
          }
       }
      

    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>