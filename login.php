
<?php
session_start();
 error_reporting (E_ALL ^ E_NOTICE); 
   $con = mysqli_connect("localhost","root","","registration") or die(mysqli_error($con));
   if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: project.html");
    exit;
}
else{



       $email = $_POST['username'];
       $pass = $_POST['psw'];
       $_SESSION['email'] = $email;

       $search = "select * from signup where email = '$email' AND password = '$pass'";
       $query = mysqli_query($con,$search);
       $num = mysqli_num_rows($query);
       //$row = mysqli_fetch_array($query);
       if ($num == 0) {
        $error = $$_GET['error'];
        $error = "<span class='red'>Enter Correct E-mail and Password Combination</span>";
        //<script> </script>
        header('location: notlogin.html');
        
      } else {
        $row = mysqli_fetch_array($query);
        $_SESSION['email'] = $row['email'];
        

        $_SESSION['user_id'] = $row['id'];
        $_SESSION['email'] = $email;
        header('location: profile.php');
      }

      /* if($query)
       {       
             session_start();
           $_SESSION['name'] = $row['email'];
           $_SESSION['user_id'] = $row['id'];
           header('location: profile.html');           
       }
       else{
           header('location : project.html');
       }*/
    }
 
?>