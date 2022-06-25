<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta2/css/all.min.css" integrity="sha512-YWzhKL2whUzgiheMoBFwW8CKV4qpHQAEuvilg9FAn5VJUDwKZZxkJNuGM4XkWuk94WCrrwslk8yWNGmY1EduTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>select table</title>
    <style>
        *{padding: 0; margin: 0; box-sizing: border-box;}
        .maindiv{
            width: 100vw; 
            height: 100vh;
            background-color:#F8F9F9 ;
            position: absolute;
            
        }
        .centerdiv{
            height: 80%;
            width: 80%;
            background-color: #2E86C1 ;
            position: relative;
            top: 50%; left: 50%;
            transform: translate(-50%,-50%);
        
        }
        table{
            background-color: #F8F9F9;
            position: relative;
            left: 50%;
            transform: translate(-50%,0);
            border: black solid 2px;
            text-align: center;
            position: relative;
            top: 50%; left: 50%;
            transform: translate(-50%,-50%);
        
            
            
        }
        table th{
            font-size:30px;
            border: black solid 2px;
            text-decoration-color:#16A085 ;
        }
        table td{ border: black solid 2px;}
        table tr{
            border: black solid 2px;
        }
        a{
            text-decoration: none;
        }
        a .fa-edit{
            color: greenyellow;
        }
        a .fa-trash{
            color: red;
        }
        a :hover{
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="maindiv">
        <div class="centerdiv">
            <table>
                <thead>
                    <th>id</th>
                    <th>Name</th>
                    <th>Mobile Number</th>
                    <th>email</th>
                    <th>post</th>
                    <th colspan="2"> operation</th>
                </thead>
                <tbody>
                    <?php  include 'connecction.php';
                          $sel="select * from `student_table`";
                          $querry=mysqli_query($con,$sel);
                         while( $res=mysqli_fetch_assoc($querry)){
                            ?>
                            <tr>
                      
                            <td><?php echo $res['id'];?></td>
                            <td><?php echo $res['Name'];?></td>
                            <td><?php echo $res['email'];?></td>
                            <td><?php echo $res['mobile'];?></td>
                            <td><?php echo $res['password'];?></td>
                            <td><a href="crud.php?id=<?php echo $res['id'];?>"><i class="fas fa-edit"></i></a></td>
                            <td><a href="passward.php?id=<?php echo $res['id'];?>"><i class="fas fa-trash"></i></a></td>
                            </tr>
                            <?php
                         };
                         ?>

                   
                 
                </tbody>
            </table>

        </div>
    </div>
</body>
</html>