<?php

    session_start();
    define('TITLE',"COSA");//title of the web page

    function strip_bad_chars( $input ){
        $output = preg_replace( "/[^a-zA-Z0-9_-]/", "", $input);
        return $output;
    }

    /*
    *check if user is logged in 
    *Redirect to index page
    */
    if(isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }

    include 'includes/HTML-head.php';
?>
    </head>

    <body>


    <section id="cover">
        <div id="cover-caption">
            <div class="container">
                <div class="col-sm-10 offset-sm-1">
                    <!--site logo-->
                    <img src='img/cosa2.png'>
                    <h5 class="text-dark">Cosa World</h5>
                    <br>
                    <?php

                        /*
                        *Chek if error occured
                        */
                        if(isset($_GET['error']))
                        {
                            if($_GET['error'] == 'emptyfields')//if it is an empty field error
                            {
                                echo '<div class="alert alert-danger" role="alert">
                                        <strong>Error: </strong>Fill In All The Fields
                                      </div>';
                            }
                            else if($_GET['error'] == 'nouser') //if it is a no user error
                            {
                                echo '<div class="alert alert-danger" role="alert">
                                        <strong>Error: </strong>Username does not exist
                                      </div>';
                            }
                            else if ($_GET['error'] == 'wrongpwd')//if wrong password user
                            {;
                                echo '<div class="alert alert-danger" role="alert">
                                        <strong>Error: </strong>Wrong password -
                                         <a href="reset-pwd.php" class="alert-link">Forgot Password?</a>
                                      </div>';
                            }
                            else if ($_GET['error'] == 'sqlerror')//if sql error
                            {
                                echo '<div class="alert alert-danger" role="alert">
                                        <strong>Error: </strong>Website error. Contact admin to have it fixed
                                      </div>';
                            }

                        }
                        else if(isset($_GET['newpwd']))//check for a new password request
                        {
                            if($_GET['newpwd'] == 'passwordupdated')
                            {
                                echo '<div class="alert alert-success" role="alert">
                                        <strong>Password Updated </strong>Login with your new password
                                      </div>';
                            }
                        }
                    ?>
                    <form method="post" action="includes/login.inc.php" class="form-inline justify-content-center">
                      <!-- Name div-->
                        <div class="form-group">
                            <label class="sr-only">Name</label>
                            <input type="text" id="name" name="mailuid"
                                   class="form-control form-control-lg mr-1" placeholder="Username">
                        </div>
                      <!-- end of name div-->

                      <!--Email div-->
                        <div class="form-group">
                            <label class="sr-only">Email</label>
                            <input type="password" id="password" name="pwd"
                                   class="form-control form-control-lg mr-1" placeholder="Password">
                        </div>
                      <!--end of email div-->

                        <input type="submit" class="btn btn-dark btn-lg mr-1" name="login-submit" value="Login">
                    </form>
                    <a href="reset-pwd.php">forgot password</a>

                    <!--Sign up section-->
                    <br><a href="signup.php" class="btn btn-light btn-lg mr-1">Signup</a>
                    <!--End of signup section-->
                    <br><br>

                    <!-- contact div-->
                    <div class="position-absolute login-icons">
                        <a href="contact.php">
                            <i class="fa fa-envelope fa-2x social-icon" aria-hidden="true"></i>
                        </a>
                        <a href="contact.php">
                            <i class="fa fa-github fa-2x social-icon" aria-hidden="true"></i>
                        </a>
                    </div>
                    <!-- end of contact div-->


                </div>
            </div>
        </div>
    </section>


        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" ></script>
    </body>
</html>
