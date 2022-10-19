

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Placements</title>
    <link href="placement.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>




</head>

<body>

    <div class="topnav">


        <div class="logo">
            <a href="project.html">
                <img src="logo.png" alt="Placement Tree">
            </a>
        </div>


        <div class="mid">
            <ul class="navbar">
                <a class="active" href="project.html">Home</a>
                <a href="about.html">About</a>
                <a href="contact.php">Contact</a>
                <a href="placement.html">Placement</a>
            </ul>
        </div>


        <div class="loginright">
            <form action="login.php" method="POST">
                <input type="text" placeholder="Username" name="username">
                <input type="text" placeholder="Password" name="psw">
                <button name= "submit" type="submit">Login</button>
            </form>

        </div>
        <div class="right">
            <button onclick="window.location.href='reg.html'">Register</button>
        </div>
    </div>
    <div class="loginerror" style="margin: 90px;">
    <main role="main" class="container">
        <h1 class="mt-5">!!! Your Feedback has been successfully submitted !!!</h1>
        <?php
    $con = mysqli_connect("localhost","root","","registration") or die(mysqli_error($con));
    session_start();

    $email = trim($_POST['email']);
    $name = trim($_POST['name']);
    $phone_no = trim($_POST['number']);
    $message = trim($_POST['message']);
    

    $user_reg_query = "insert into contact(Name,email,contact,message) values ('$name','$email','$phone_no','$message')";

    $user_reg_submit = mysqli_query($con,$user_reg_query) or die(mysqli_error($con));

   $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['id'] = $user_id;
    /*header('location: user.html');
    */
    //$row = mysqli_fetch_array($user_reg_submit);
   // $_SESSION['email'] = $row['email'];
   // header('location : contact.html');
   if($user_reg_submit){
    /*$_SESSION['Name'] = $name;
    header('location : contact.php');*/
    echo '<a href="project.html">Click here to Go back to HOMEPAGE</a>';
   }
   else
   {
       echo "Submit failed";
   }
   
?>

        
    
      </main>
    </div>





    <div class="container3">
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row">
                <div class="col-12 col-md">
                    <img class="mb-2" src="ptlogo.PNG" alt="" width="80" height="60" style="margin-left: 80px;">
                    <small class="d-block mb-3 text-muted" style="margin-left: 80px;">© 2017-2020</small>
                </div>
                <div class="col-6 col-md">
                    <h5 style="color: rgba(255, 255, 255, 0.864);">Team Members</h5>
                    <ul class="list-unstyled text-small ">
                        <li><a class="text-muted " href="# ">Ishan Munjhal</a></li>
                        <li><a class="text-muted " href="# ">Nishant Panwar</a></li>
                        <li><a class="text-muted " href="# ">Ayush Mishra</a></li>
                        <li><a class="text-muted " href="# ">Prashant Khandelwal</a></li>


                    </ul>
                </div>
                <div class="col-6 col-md ">
                    <h5 style="color: rgba(255, 255, 255, 0.864);">Courses</h5>
                    <ul class="list-unstyled text-small ">
                        <li><a class="text-muted " href="# ">Web Management</a></li>
                        <li><a class="text-muted " href="# ">Hotel Management</a></li>
                        <li><a class="text-muted " href="# ">Law Services</a></li>
                        <li><a class="text-muted " href="# ">Coding Courses</a></li>
                        <li><a class="text-muted " href="# ">And Many More</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md ">
                    <h5 style="color: rgba(255, 255, 255, 0.864);">Companies</h5>
                    <ul class="list-unstyled text-small ">
                        <li><a class="text-muted " href="# ">TCS</a></li>
                        <li><a class="text-muted " href="# ">Wipro</a></li>
                        <li><a class="text-muted " href="# ">Infosys</a></li>
                        <li><a class="text-muted " href="# ">Symbian</a></li>
                    </ul>
                </div>
            </div>
        </footer>
    </div>

    <div class="container4">
        <nav class="navbar bottom navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="#">placement tree</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
                    </li>
                    <li class="nav-item dropup">
                        <a class="nav-link dropdown-toggle" href="#" id="dropdown10" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">Dropup</a>
                        <div class="dropdown-menu" aria-labelledby="dropdown10">
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</body>

</html>