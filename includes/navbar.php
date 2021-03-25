<?php 

  /**
   * navigation bar for the site
   * @author Collins Simiyu
   */
?>
<nav class="navbar sticky-top navbar-expand-md navbar-light bg-light">
    <!--cosa logo-->
    <a class="navbar-brand" href="index.php">
        <img src="img/cosa2.png" width="80" height="40">
    </a>
    <!--end of cosa logo-->

    <!--button to toggle menu options in mobile view-->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <!--end of toggler button-->

    <div class="collapse navbar-collapse justify-content-right" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto mr-1">
            <!--index page section-->
            <li class="nav-item px-3">
                <a class="nav-link" href="index.php">
                    <i class="fa fa-home fa-2x" aria-hidden="true"></i>
                </a>
            </li>
            <!--end index page section-->
            <li class="nav-item px-3">
                <a class="nav-link" href="https://github.com/COSA-INC">
                    <i class="fa fa-github fa-2x" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="message.php">
                    <i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="users-view.php">
                    <i class="fa fa-users fa-2x" aria-hidden="true"></i>
                </a>
            </li>
            <li class="nav-item dropdown px-3">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fa fa-cog fa-2x" aria-hidden="true"></i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="profile.php">My Profile</a>
                    <a class="dropdown-item" href="edit-profile.php">Edit Profile</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="users-view.php">Find People</a>
                    <a class="dropdown-item" href="contact.php">Contact Us</a>
                </div>
            </li>
            <li class="nav-item px-3">
                <a class="nav-link" href="includes/logout.inc.php">
                    <i class="fa fa-sign-out fa-2x" aria-hidden="true"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>