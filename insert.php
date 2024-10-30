

<!-- connection -->
 
<?php
include("connection.php");
?>


 <!-- insert_query -->

<?php
if (isset($_POST["sub"])) {
 
  $name = $_POST["name"];
  $email = $_POST["email"];  
  $message = $_POST["message"];

   $insert = "insert into orders_data(name, email, message) values( '$name', '$email', '$message')";
               $run = mysqli_query($con, $insert);

                            if ($run) 
                             {
                          
                              echo "<script> alert('Thanks For Your Message ') 
                              window.location.href = 'index.php';
                           
                              </script>" ;
                            }
                           
                           else
                           {
                              echo "<script> alert('In-Valid ! Please Try Again') 
                              window.location.href = 'contact.php';
                              
                              </script>" ;
                           }
}
?>
<!-- insertquery_end -->

