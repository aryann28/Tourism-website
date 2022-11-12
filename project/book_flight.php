<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST'){
   $name = $_POST['name'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $flight= $_POST['flight'];
   $source = $_POST['source'];
   $destination = $_POST['destination'];
   $date = $_POST['date'];
   $address =$_POST['address'];
//    $checkout = $_POST['checkout'];

   //$request = " insert into book_form(name, email, phone, address, location, destination, arrivals, leaving) values('$name','$email','$phone','$address','$location','$destination','$arrivals','$leaving') ";
   //mysqli_query($connection, $request);

   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "book_db";
    // Create a connection
    $conn = mysqli_connect($servername, $username, $password, $database);
    // Die if connection was not successful
    if (!$conn){
        die("Sorry we failed to connect: ". mysqli_connect_error());
    }
    else{ 
      echo $address;
      // Submit these to a database
      // Sql query to be executed 
      $sql = "INSERT INTO `book_flight`(`name`, `email`, `phone`, `flight`, `source`, `destination`, `date`, `address`) VALUES ('$name','$email','$phone','$flight','$source','$destination','$date','$address')";
      $result = mysqli_query($conn, $sql);
    //   echo $result;

      if($result){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your entry has been submitted successfully!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>'; 
      }
      else{
          // echo "The record was not inserted successfully because of this error ---> ". mysqli_error($conn);
          echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Error!</strong> We are facing some technical issue and your entry was not submitted successfully! We regret the inconvinience caused!
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">×</span>
        </button>
      </div>';
      }

    }
   }

  


   

   
   //    header('location:book.php'); 

   // }else{
   //    echo 'something went wrong please try again!';
   // }

?>