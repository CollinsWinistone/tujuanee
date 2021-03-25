<?php

/**
 * Signup script
 * This scripts adds anew user to the site
 */


if (isset($_POST['signup-submit']))//if signup form is submitted
{
    
    require 'dbh.inc.php';//database file
    
    
    $userName = $_POST['uid'];
    $email = $_POST['mail'];
    $password = $_POST['pwd'];
    $passwordRepeat  = $_POST['pwd-repeat'];
    $gender = $_POST['gender'];
    $headline = $_POST['headline'];
    $bio = $_POST['bio'];
    $f_name = $_POST['f-name'];
    $l_name = $_POST['l-name'];
    
    /**
     * Check if all fields are empty
     * If they are,send an empty fields error to
     * the signup page
     */
    if (empty($userName) || empty($email) || empty($password) || empty($passwordRepeat))
    {
        header("Location: ../signup.php?error=emptyfields&uid=".$userName."&mail=".$email);
        exit();
    }
    /**
     * Validate email and username
     * @var email User email
     * @var uid Username
     * If username and email not valid,
     * throw invalidmailuid error
     */
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $userName))
    {
        header("Location: ../signup.php?error=invalidmailuid");
        exit();
    }
    /**
     * If email is invalid,
     * throw an invalidmail error
     */
    else if (!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("Location: ../signup.php?error=invalidmail&uid=".$userName);
        exit();
    }
    /**
     * If username ris not valid,
     * throw invaliduid error
     */
    else if (!preg_match("/^[a-zA-Z0-9]*$/", $userName))
    {
        header("Location: ../signup.php?error=invaliduid&mail=".$email);
        exit();
    }
    /**
     * If passwords dont match
     * throw password check error
     */
    else if ($password !== $passwordRepeat)
    {
        header("Location: ../signup.php?error=passwordcheck&uid=".$userName."&mail=".$email);
        exit();
    }
    else
    {
        // checking if a user already exists with the given username
        $sql = "select uidUsers from users where uidUsers=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql))
        {
            header("Location: ../signup.php?error=sqlerror");
            exit();
        }
        else
        {
            mysqli_stmt_bind_param($stmt, "s", $userName);
            mysqli_stmt_execute($stmt);
            mysqli_stmt_store_result($stmt);
            
            $resultCheck = mysqli_stmt_num_rows($stmt);
            
            /**
             * If resultCheck is greator than 0 
             * Then username already taken
             * Throw usertaken exception
             */
            if ($resultCheck > 0)
            {
                header("Location: ../signup.php?error=usertaken&mail=".$email);
                exit();
            }
            else
            {
                $FileNameNew = 'default.png';
                require 'upload.inc.php';
                
                $sql = "insert into users(uidUsers, emailUsers, f_name, l_name, pwdUsers, gender, "
                        . "headline, bio, userImg) "
                        . "values (?,?,?,?,?,?,?,?,?)";
                $stmt = mysqli_stmt_init($conn);
                if (!mysqli_stmt_prepare($stmt, $sql))
                {
                    header("Location: ../signup.php?error=sqlerror");
                    exit();
                }
                else
                {
                    $hashedPwd = password_hash($password, PASSWORD_DEFAULT);//hashed password
                    
                    mysqli_stmt_bind_param($stmt, "sssssssss", $userName, $email, $f_name, $l_name,
                            $hashedPwd, $gender,
                            $headline, $bio, $FileNameNew);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                    
                    header("Location: ../signup.php?signup=success");
                    exit();
                }
            }
        }
    }
    
    mysqli_stmt_close($stmt);
    mysqli_close($conn);
    
}

else
{
    header("Location: ../signup.php");
    exit();
}