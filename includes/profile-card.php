<!---Profile card for our users-->

            <div class='card card-profile text-center'>
                <img alt='' class='card-img-top card-user-cover' src='img/cosa2.png'>
                <div class='card-block'>
                    <a href='profile.php'>
                        <img src='uploads/<?php echo $_SESSION["userImg"] ?>' class='card-img-profile'>
                    </a>
                    <!-- administrator badge-->
                    <?php
                        /**
                         * if userLevel ==1,the he/she is an adminstartor
                         * Add a badge to their profile
                         */
                        if ($_SESSION['userLevel'] == 1)
                        {
                            echo '<img id="card-admin-badge" src="img/admin-badge.png">';
                        }
                    ?>
                    <!--end of administrator-->

                    <!--edit profile section-->
                    <a href="edit-profile.php">
                        <i class="fa fa-pencil fa-2x edit-profile" aria-hidden="true"></i>
                    </a>
                    <!--end of edit profile-->

                    <h4 class='card-title'>
                    <?php echo ucwords($_SESSION['userUid']); ?>
                        <small class="text-muted">
                            <?php echo ucwords($_SESSION['f_name']." ".$_SESSION['l_name']); ?>
                        </small>
                        <br>
                        <small class="text-muted"><?php echo $_SESSION['headline']; ?></small>
                        <br><br><br>
                    </h4>
                </div>
            </div>
