<?php
   include "connection.php";
   include "navigation.php";
?>
<!DOCTYPE html>
<html>
<head>

  <title>Student Registration</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
  
</head>
<body>

<section>
  <div class="reg_img">

    <div class="box2">
       
        <h1 style="text-align: center; font-size: 25px;">User Sign up Form</h1><br>
      <form name="Registration" action="" method="post">
        <br><br>
        <div class="login">

            <input class="form-control" type="text" name="username" placeholder="Username" required=""> <br>
            <input class="form-control" type="password" name="password" placeholder="Password (Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters)" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}"  required=""> <br>
            <input class="form-control" type="text" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required=""><br>
            <input class="form-control" type="text" name="phone" placeholder="Phone No"  required=""><br>
            <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color: black; width: 70px; height: 30px"> </div>
      </form>
     
    </div>
  </div>
  <?php

      if(isset($_POST['submit']))
      {
        $count=0;

        $sql="SELECT username from `login`";
        $res=mysqli_query($db,$sql);

        while($row=mysqli_fetch_assoc($res))
        {
          if($row['username']==$_POST['username'])
          {
            $count=$count+1;
          }
        }
        if($count==0)
        {
          mysqli_query($db,"INSERT INTO `LOGIN` VALUES('$_POST[username]', '$_POST[password]','$_POST[email]', '$_POST[phone]');");
        ?>
          <script type="text/javascript">
           alert("Registration successful");
          </script>
        <?php
        }
        else
        {

          ?>
            <script type="text/javascript">
              alert("The username already exist.");
            </script>
          <?php

        }

      }

    ?>

</section>
</body>