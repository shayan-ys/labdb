<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/19/15
 * Time: 1:40 AM
 */
session_start();
?>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Clinic Automation</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="controllers/signout.php">Sign out</a></li>
                <?php if(isset($_SESSION) && isset($_SESSION['user_type'])) { ?>
                    <li><a href="http://localhost/labdb/<?php echo $_SESSION['user_type']; ?>">Profile</a></li>
                <?php } ?>
            </ul>
        </div>
    </div>
</nav>
