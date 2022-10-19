<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

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
                <a  href="project.html">Home</a>
                <a class="active" href="about.html">About</a>
                <a href="contact.php">Contact</a>
                <a href="placement.html">Placement</a>
            </ul>
        </div>


        <div class="loginright">
            <form action="/action_page.php">
                <input type="text" placeholder="Username" name="username">
                <input type="text" placeholder="Password" name="psw">
                <button type="submit">Login</button>
            </form>

        </div>
        <div class="right">
            <button onclick="window.location.href='reg.html'">Register</button>
        </div>
    </div>




    <div class="bgaboutus">
            <img src="about.jpg" alt="About Us" style="background-size: cover; width: 100%; height: 300px; margin-top: 5px; background-position: center;">
        </div>

<div class="container py-5">
    <div class="row-py-3">
    <div class="col-md-8">
       
        <div class="card">
            <div class="card-body">
                <?php
                $connection= mysqli_connect("localhost","root","","adminpanel");

            $query = " SELECT * FROM abouts";

             $query_run = mysqli_query($connection, $query);

                if(mysqli_num_rows($query_run) > 0)
                      {
                       foreach($query_run as $row)
                     {
                          ?>


            




                <h2 class="card-title"> <?php echo $row['title'];?></h2>
                <h4>  <?php echo $row['subtitle'];?> </h4>
                <p class="card-text">  <?php echo $row['description'];?></p>
                <a href="<?php echo $row['links']; ?> " class="btn btn-primary">Know More</a>
            <?php
            }
        }
        else{
            echo "No Record Found";
        }
        ?>
            
            
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card">
        <h5 class="card-title">Notices:</h5>
            <div class="card-body">
                <h5 class="card-title"> Requirements in TCS</h5>
                <p class="card-text"> Software Developer(BCA, BBA, BTech) </p>
                <a href="#" class="btn btn-primary">Know More</a>
            </div>
        </div>
        <hr>
        <div class="card">
        <h5 class="card-title">Notices:</h5>
            <div class="card-body">
                <h5 class="card-title">  Requirements in TESLA</h5>
                <p class="card-text">Data Analysis(BTech, BBA)</p>
                <a href="#" class="btn btn-primary">Know More</a>
            </div>
        </div>
    </div>
</div>
</div>



           
    
</div>

<style>
    .row{
    margin-left: 350px;
    }
    </style>

        
        <h1 style="text-align:center; font-weight: bold; font-family: 'Times New Roman', Times, serif; text-decoration: underline;">Our Team</h1>
        <div class="row">


        <div class="column">
                <div class="card">
                    <img src="nishant.jpg" alt="Nishant" style="width:100%; height:350px;">
                    <div class="container7">
                        <h2>Nishant Panwar</h2>
                        <p class="title">Founder</p>
                        <p>The one who loves to code in silence. Nishant likes to code with a peaceful mind. The monk in the team; he probably goes into a trance once he sets his earphones in and starts coding. The only times he comes out of it is when either
                            the CEO calls him or he needs to check the latest football news. </p>
                        <h5>NIshantp65@gmail.com
                            <h5>

                    </div>
                </div>
            </div>
            <div class="column">
                <div class="card">
                    <img src="ishan.jpg" alt="Ishan" style="width:100%; height:350px;">
                    <div class="container7">
                        <h2>Ishan Munjhal</h2>
                        <p class="title">CEO</p>
                        <p>The one who started it all. It takes a lot of guts to create a platform like this and he's the one with all of it. Meet the CEO. Yes, he's got loads of patience and humility. But on that once-in-a day when he breathes fire, no
                            one dares to tread his territory. He's a master manager and rightfully at the helm of affairs at Placement Tree.</p>
                        <h5>Ishaanmunjhal12@gmail.com
                            <h5>

                    </div>
                </div>
            </div>

            <div class="column">
                <div class="card">
                    <img src="ayush.jpg" alt="Ayush" style="width:100%; height:350px;">
                    <div class="container7">
                        <h2>Ayush Mishra</h2>
                        <p class="title">Director</p>
                        <p>The one with the big dreams. He is a dreamer with eyes towards the sky. He mostly stays in his woven world and there are only two things that pull him out of that- his family and his laptop. He swears that he loves coding and managing
                            things the most and that's why he is an indispensable member of the Direction team.</p>
                        <h5>Ayushmishra@gmail.com
                            <h5>

                    </div>
                </div>
            </div>

            
            <div class="column">
                <div class="card">
                    <img src="praashanr.jpg" alt="Nishant" style="width:100%; height:350px;">
                    <div class="container7">
                        <h2>Prashant Khandelwal</h2>
                        <p class="title">Senior Expert</p>
                        <p>The one who loves to code in silence. Nishant likes to code with a peaceful mind. The monk in the team; he probably goes into a trance once he sets his earphones in and starts coding. The only times he comes out of it is when either
                            the CEO calls him or he needs to check the latest football news. </p>
                        <h5>prashant@gmail.com
                            <h5>

                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="container3 ">
        <footer class="pt-4 my-md-5 pt-md-5 border-top">
            <div class="row ">
                <div class="col-12 col-md ">
                    <img class="mb-2" src="ptlogo.PNG" alt="" width="80" height="60" style="margin-left: 80px;">
                    <small class="d-block mb-3 text-muted" style="margin-left: 80px;">© 2017-2020</small>
                </div>
                <div class="col-6 col-md ">
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
    <div class="container4 ">
        <nav class="navbar bottom navbar-expand-sm navbar-dark bg-dark ">
            <a class="navbar-brand " href="# ">placement tree</a>
            <button class="navbar-toggler " type="button " data-toggle="collapse " data-target="#navbarCollapse " aria-controls="navbarCollapse " aria-expanded="false " aria-label="Toggle navigation ">
              <span class="navbar-toggler-icon "></span>
          </button>
            <div class="collapse navbar-collapse " id="navbarCollapse ">
                <ul class="navbar-nav mr-auto ">
                    <li class="nav-item active ">
                        <a class="nav-link " href="project.html">Home <span class="sr-only ">(current)</span></a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="# ">Link</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link disabled " href="# " tabindex="-1 " aria-disabled="true ">Disabled</a>
                    </li>
                    <li class="nav-item dropup ">
                        <a class="nav-link dropdown-toggle " href="# " id="dropdown10 " data-toggle="dropdown " aria-haspopup="true " aria-expanded="false ">Dropup</a>
                        <div class="dropdown-menu " aria-labelledby="dropdown10 ">
                            <a class="dropdown-item " href="# ">Action</a>
                            <a class="dropdown-item " href="# ">Another action</a>
                            <a class="dropdown-item " href="# ">Something else here</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
    </div>

</body>

</html>