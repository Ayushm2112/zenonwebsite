<!DOCTYPE html>
<html lang="en">

<head>
    <title>Placement Tree</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width initial-scale=1.0">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="placeuser.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx"
        crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>



</head>

<body>



    <div class="topnav">


        <div class="logo">
            <a href="user.php">
                <img src="logo.png" alt="Placement Tree">
            </a>
        </div>


        <div class="mid">
            <ul class="navbar">
                <a  href="user.php">Home</a>
                <a href="aboutuser.html">About</a>
                <a href="contactuser.html">Contact</a>
                <a class="active" href="placeuser.html">Placement</a>
            </ul>
        </div>


        <div class="right">
            <div class="dropdown">
                <button class="dropbtn">My Account <i class="fa fa-caret-down"></i></button>
                <div class="dropdown-content">
                    <a href="profile.php">Profile</a>
                    <a href="resume.html">Resume</a>
                    <a href="profile.html">Log Out</a>
                </div>
            </div>
        </div>
    </div>




    <div class="image">
        <div class="container1 my-1">
            <div class="row">
                <div class="col-lg-6" style="background-color: rgba(255, 255, 255, 0.251);">
                    <img src="productt.png" alt="pbc" style="margin-top: 40px; height: 250px;">
                    <h2
                        style="color: rgb(248, 248, 248); font-size: 60px; margin-left: 40px; font-weight: bold; font-family: 'Times New Roman', Times, serif;">
                        Placement</h2>
                    <p
                        style="color: rgb(0, 0, 0); font-size: 20px; font-weight: bold; margin-top: 40px; margin-left: 40px; margin-right: 20px; height: 250px;">
                        Placement Tree provides the best courses in the town at very reasonable prices.We have different
                        types of courses for different streams of students for a better understanding and best knowledge.
                        Whether it is a management course or
                        a coding course, we have tried to excell in everything at it's best.</p>
    
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="container marketing">
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">First Procedure for test <span class="text-muted">in placement test</span>
                </h2>
                <p class="lead">There are 5 questions in the test. Each Question is mandatory </p>
            </div>
            <div class="col-md-5">
    
    
                <img width="100%" height="100%"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                    role="img" aria-label="Placeholder: 500x500" src="test.jpg" alt="tcs">
                </img>
            </div>
        </div>
    
    
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Oh yeah, it’s that good. <span class="text-muted">Time Limit.</span>
                </h2>
                <p class="lead"> Time limit will be given as per the questions are there.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img width="100%" height="100%"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                    role="img" aria-label="Placeholder: 500x500" src="time.jpg" alt="tcs">
                </img>
            </div>
        </div>
    
    
    
        <hr class="featurette-divider">
    
        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">And lastly, <span class="text-muted">Checkmate.</span></h2>
                <p class="lead">Congrates... an email will be send to your login email id. Placement Done....simple,easy,no
                    time waste.</p>
            </div>
            <div class="col-md-5">
                <img width="100%" height="100%"
                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto" width="500"
                    height="500" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false"
                    role="img" aria-label="Placeholder: 500x500" src="congo.jpg" alt="tcs">
                </img>
            </div>
        </div>
    
        <hr class="featurette-divider">
    
    </div>
</div>
    
    
    
    <div class="container py-5">
         <div class = "row mt-4">
                
            <?php

                $connection= mysqli_connect("localhost","root","","companypannel");

                $query = " SELECT * FROM company";

                $query_run = mysqli_query($connection, $query);

                $check_company = mysqli_num_rows($query_run) > 0;

            If($check_company)
             {

                 while($row = mysqli_fetch_assoc($query_run))
             {

             ?>


     <div class="col-md-3 mt-3">

     <div class="card">
     <img src= "companypannel/upload/<?php echo $row['images']; ?>" width="255px" height="200px" alt="Company Images">
     <div class= "card-body">
     <h4 class = "card-title" > <?php echo $row ['name']; ?> </h4>
     <p class = "card-text">
         <?php echo $row['descrip'];?>
     </p>
     
     <button  class="brn btn-success" > <h5> <a href="<?php echo $row['links']; ?> "  >Start Test</a></h5> </button>

         
</div>
</div>
</div>
<?php
           }}
 else

    {
        echo "No Faculty Found";
    }
 ?>
 </div>
          

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