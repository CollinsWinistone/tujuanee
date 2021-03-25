<?php

/**
 * Sign up page
 * @author Collins Simiyu
 */

    session_start();
    define('TITLE',"Signup | Cosa");
    
    /**
     * if user is logged in
     * redirect to index page
     */
    if(isset($_SESSION['userId']))
    {
        header("Location: index.php");
        exit();
    }

    //header page
    include 'includes/HTML-head.php';
?>  
    </head>
    
    <body>

        <!-- Signup section-->
        <div id="signup">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6 offset-sm-1">
                        
                        <div class="signup-left position-fixed text-center">
                            
                            <img src="img/cosa2.png">
                            <br><br><br>
                            <?php
                            
                                /**
                                 * if error is available in  the request
                                 * Check its type and display the correct reponse message
                                 */
                                if(isset($_GET['error']))
                                {
                                    //empty field error
                                    if($_GET['error'] == 'emptyfields')
                                    {
                                        echo '<div class="alert alert-danger" role="alert">
                                                <strong>Error: </strong> Fill In All The Fields
                                              </div>';
                                    }
                                    //invalidmailuid error
                                    else if ($_GET['error'] == 'invalidmailuid')
                                    {
                                        echo '<div class="alert alert-danger" role="alert">
                                                <strong>Error: </strong> Please enter a valid email and user name
                                              </div>';
                                    }
                                    //invalidmail error
                                    else if ($_GET['error'] == 'invalidmail')
                                    {
                                        echo '<div class="alert alert-danger" role="alert">
                                                <strong>Error: </strong> Please enter a valid email
                                              </div>';
                                    }
                                    //invalid userid error
                                    else if ($_GET['error'] == 'invaliduid')
                                    {
                                        echo '<div class="alert alert-danger" role="alert">
                                                <strong>Error: </strong> Please enter a valid user name
                                              </div>';
                                    }
                                    //passwords dont maych error
                                    else if ($_GET['error'] == 'passwordcheck')
                                    {
                                        echo '<div class="alert alert-danger" role="alert">
                                                <strong>Error: </strong> Passwords donot match
                                              </div>';
                                    }
                                    //user taken error
                                    else if ($_GET['error'] == 'usertaken')
                                    {
                                        echo '<div class="alert alert-danger" role="alert">
                                                <strong>Error: </strong> This User name is already taken
                                              </div>';
                                    }
                                    //invalid image type error
                                    else if ($_GET['error'] == 'invalidimagetype')
                                    {
                                        echo '<div class="alert alert-danger" role="alert">
                                                <strong>Error: </strong> Invalid image type 
                                              </div>';
                                    }
                                    //image upload error
                                    else if ($_GET['error'] == 'imguploaderror')
                                    {
                                        echo '<div class="alert alert-danger" role="alert">
                                                <strong>Error: </strong> Image upload error, please try again
                                              </div>';
                                    }
                                    //image size exceeded error
                                    else if ($_GET['error'] == 'imgsizeexceeded')
                                    {
                                        echo '<div class="alert alert-danger" role="alert">
                                                <strong>Error: </strong> Image too large
                                              </div>';
                                    }
                                    //sql error
                                    else if ($_GET['error'] == 'sqlerror')
                                    {
                                        echo '<div class="alert alert-danger" role="alert">
                                                <strong>Website Error: </strong> Contact admin to have the issue fixed
                                              </div>';
                                    }
                                }
                                //successfull signup
                                else if (isset($_GET['signup']) == 'success')
                                {
                                    echo '<div class="alert alert-success" role="alert">
                                            <strong>Signup Successful</strong> Please Login from the login menu
                                          </div>';
                                }
                            ?>
                            <!--Signup form-->
                            <form id="signup-form" action="includes/signup.inc.php" method='post' 
                                  enctype="multipart/form-data">
                                <!-- Submit section-->
                                <input type="submit" class="btn btn-light btn-lg" name="signup-submit" value="Signup">
                                <!--End of sign up section-->
                                
                                <br><br>
                                
                                    <a  href="login.php">
                                        <i class="fa fa-sign-in fa-2x social-icon" aria-hidden="true"></i>
                                    </a> 
                                    <a href="contact.php">
                                        <i class="fa fa-envelope fa-2x social-icon" aria-hidden="true"></i>
                                    </a>
                                
                            
                        </div>
                        
                        
                    </div>
                    
                    <div class="col-sm-6 offset-sm-6 text-center">
                        
                        <h1 class="mt-5 text-muted">Signup To Cosaworld.com!</h1>
                        <br><br><br>
                        
                        <!--Username section-->
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="name">Username</label>
                            <input type="text" class="form-control" id="name" name="uid" placeholder="Username" maxlength="25">
                          </div>
                        <!--end username-->

                        <!--Email section-->
                          <div class="form-group col-md-6">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" id="email" name="mail" placeholder="Email">
                          </div>
                        </div>
                        <!--end email section-->

                        <!--Password section-->
                        <div class="form-row">
                          <div class="form-group col-md-6">
                            <label for="pwd">Password</label>
                            <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Password">
                          </div>
                        <!--end password section-->
                      
                          <!--password confirmation section-->
                          <div class="form-group col-md-6">
                            <label for="pwd-repeat">Confirmation</label>
                            <input type="password" class="form-control" id="pwd-repeat" name="pwd-repeat" 
                                   placeholder="Confirm Password">
                          </div>
                          <!--end of password confirmation-->
                        </div>

                        <!--start of optional section-->
                        <div class="form-row border-top my-3">
                            <div class="form-group col-md-12">
                                <h2>Optional</h2>
                            </div>
                        </div>
                        <!--end of optional section-->

                        <!--Fisrtname-->
                        <div class="form-row ">
                          <div class="form-group col-md-6">
                            <label for="f-name">First Name</label>
                            <input type="text" class="form-control" id="f-name" name="f-name" placeholder="First name" maxlength="35">
                          </div>
                        <!--end of section -->

                        <!--Last name section-->
                          <div class="form-group col-md-6">
                            <label for="l-name">Last Name</label>
                            <input type="text" class="form-control" id="l-name" name="l-name" placeholder="Last name" maxlength="35">
                          </div>
                        </div>
                        <!--end of lastname section-->

                        <!--start of image and gender section-->
                        <div class="form-row">
                            <!--Gender div-->
                            <div class="form-group col-md-6 align-self-center">
                                <label >Gender</label><br>
                                <input id="toggle-on" class="toggle toggle-left" name="gender" value="m" type="radio" checked>
                                <label for="toggle-on" class="btn-r">M</label>
                                <input id="toggle-off" class="toggle toggle-right" name="gender" value="f" type="radio">
                                <label for="toggle-off" class="btn-r">F</label>
                            </div>
                            <!--end of gender div-->

                            <!--start of file upload section-->
                            <div class="form-group col-md-6 align-self-center">
                                <img id="blah" class="rounded" src="#" alt="your image" class="img-responsive rounded"
                                     style="height: 200px; width: 190px; object-fit: cover;">
                                <br><br><label class="btn btn-primary ">
                                    Add Image <input type="file" id="imgInp" name='dp' hidden>
                              </label>
                            </div>
                            <!--end of file upload section-->
                        </div>
                        <!--end of image and gender section-->
                        <div class="form-row">
                            <!--Headline section-->
                            <div class="form-group col-md-12">
                            <label for="headline">Headline</label>
                            <input type="text" class="form-control" id="headline" name="headline" 
                                   placeholder="Your profile headline" 
                                   maxlength="120">
                            </div>
                            <!--headline section-->
                        </div>
                        <!--bio section-->
                        <div class="form-group">
                            <label for="bio">Bio</label>
                            <textarea class="form-control" id="bio" name="bio" rows="6" maxlength="1000"
                            placeholder="Tell people about yourself"></textarea>
                        </div>
                        <!--end bio section-->
                       
                    </form>
                    <!--end of signup form-->
                </div>
                    
                </div>
                
            </div>
        </div>
        
        
        
                            
                            
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js" ></script>
        
                            <script>
                                //#blah is the default image which should be replaced 
                                //by a custom image selected by the user
                                $('#blah').attr('src', 'uploads/default.png');
                                function readURL(input) {
                                    //if atleast one file is available
                                    if (input.files && input.files[0]) {
                                      var reader = new FileReader();//read files asyncronously

                                      reader.onload = function(e) {
                                        $('#blah').attr('src', e.target.result);
                                      }

                                      reader.readAsDataURL(input.files[0]);
                                    }
                                  }

                                  $("#imgInp").change(function() {
                                    readURL(this);
                                  });
                                  
                                  
                            </script>
        
    </body>
</html>