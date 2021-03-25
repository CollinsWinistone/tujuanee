<?php

    /**
     * Blog page 
     * @author Collins Simiyu
     * 
     */


    session_start();
    require 'includes/dbh.inc.php';//database file

    define('TITLE',"Cosa Blog");

    /**
     * if user is not logged in ,
     * redirect to login page
     */
    if(!isset($_SESSION['userId']))
    {
        header("Location: login.php");
        exit();
    }

    /**
     * Check if blog id is available in the GET request
     */
    if(isset($_GET['id']))
    {
        $blogId = $_GET['id'];
    }
    else
    {
        header("Location: index.php");
        exit();
    }

    include 'includes/HTML-head.php';
?>
    </head>
    <body>

    <?php include 'includes/navbar.php'; ?>
      <div class="container">
        <div class="row">
          <!--user profile-->  
          <div class="col-sm-3">

              <?php include 'includes/profile-card.php'; ?>

          </div>
          <!--end of user profile-->

            <!-- BLOG section-->
          <div class="col-sm-9" id="user-section">

                <?php

                    //query for users and blogs
                    $sql = "select * from blogs, users
                            where blog_id = ?
                            and blogs.blog_by = users.idUsers";

                    $stmt = mysqli_stmt_init($conn);

                    if (!mysqli_stmt_prepare($stmt, $sql))
                    {
                        die('SQL error');
                    }
                    else
                    {
                        mysqli_stmt_bind_param($stmt, "s", $blogId);
                        mysqli_stmt_execute($stmt);
                        $result = mysqli_stmt_get_result($stmt);

                        $row = mysqli_fetch_assoc($result);
                    }
                ?>

                <!--blog image-->
              <img class="blog-cover" src="uploads/<?php echo $row['blog_img']; ?>">

               <!-- blog author image-->     
              <img class="blog-author" src="uploads/<?php echo $row['userImg']; ?>">

              <div class="px-5">

                  <br><br><br>
                  <!-- blog title-->
                  <h1><?php echo ucwords($row['blog_title']) ?></h1>
                  <br><br><br>
                  <!--blog content section-->  
                  <p class="text-justify"><?php echo $row['blog_content'] ?></p>
                   <!-- blog likes section--> 
                  <div class="blog-likes pr-1 pt-5">
                      <!-- blog vote section-->  
                      <h3>
                            <a href="includes/blog-vote.inc.php?blog=<?php echo $row['blog_id']; ?>" >
                                <i class="fa fa-thumbs-up fa-2x" aria-hidden="true"></i>
                            </a>
                            <?php echo $row['blog_votes']; ?>
                      </h3>
                      <!--end of blog vote section-->
                      <br>
                      <!-- Blog author-->
                      <p class="text-muted">Author: <?php echo ucwords($row['uidUsers']); ?></p>
                      <!--endBlock author-->
                  </div>

              </div>



          </div>

        </div>
        <!--endBlock Blog-->


      </div> <!-- /container -->


<?php include 'includes/footer.php'; ?>



<?php include 'includes/HTML-footer.php'; ?>
