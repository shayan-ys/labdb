<?php
/**
 * Created by PhpStorm.
 * User: Shayanyousefian
 * Date: 12/19/15
 * Time: 9:16 AM
 */
require_once 'check_sign.php';
//checkSign();
if(isset($_GET) && isset($_GET['id'])) {
//    $result = $conn->query("SELECT * FROM reception WHERE reception_id = '".$_GET['id']."' LIMIT 1; ");
//    if($result->num_rows>0){
//        $row = $result->fetch_assoc();
//        $_GET['doctor_id'] = $row['doctor_id'];
//    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Clinic Homepage</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

<?php include_once 'header.php'; ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-sm-3 col-md-2 sidebar">
            <ul class="nav nav-sidebar">
                <li><a href="#">Overview <span class="sr-only">(current)</span></a></li>
                <li class="active"><a href="http://localhost/labdb/recept.php">Reception</a></li>
                <li><a href="#">Analytics</a></li>
                <li><a href="#">Export</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Nav item</a></li>
                <li><a href="">Nav item again</a></li>
                <li><a href="">One more nav</a></li>
                <li><a href="">Another nav item</a></li>
                <li><a href="">More navigation</a></li>
            </ul>
            <ul class="nav nav-sidebar">
                <li><a href="">Nav item again</a></li>
                <li><a href="">One more nav</a></li>
                <li><a href="">Another nav item</a></li>
            </ul>
        </div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
            <h1 class="page-header">Patients Dashboard - Reception</h1>

            <div class="row placeholders">
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Doctors Panel</h4>
                    <span class="text-muted">Something else</span>
                </div>
                <a href="index.php" class="col-xs-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Patients Pane</h4>
                    <span class="text-muted">Something else</span>
                </a>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
                <div class="col-xs-6 col-sm-3 placeholder">
                    <img src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" width="200" height="200" class="img-responsive" alt="Generic placeholder thumbnail">
                    <h4>Label</h4>
                    <span class="text-muted">Something else</span>
                </div>
            </div>

            <form class="form-horizontal" action="controllers/add_reception.php" method="POST">
                <input name="action" type="hidden" value="<?php echo isset($_GET['doctor_id'])? 'update':'insert'; ?>" />
                <input name="patient_id" type="hidden" value="<?php echo $_SESSION['id']; ?>" />
                <?php if(isset($_GET['id'])){ ?>
                    <input name="reception_id" type="hidden" value="<?php echo $_GET['id']; ?>" />
                <?php } ?>
                <h2 class="form-group">Add Reception Form</h2>
                <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Doctor</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="doctor_id" >
                            <?php
//                                $result = $conn->query("SELECT doctor_id, `name`, specialty FROM doctor;");
//                                if(isset($_GET) && isset($_GET['doctor_id'])) $pre_doctor_id = $_GET['doctor_id'];
//                                if($result->num_rows>0){
//                                    while($row = $result->fetch_assoc())
//                                        echo "<option value='".$row['doctor_id']."'>"
//                                            .$row['name']." - ".$row['specialty']."</option>";
//                                }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary"><?php echo isset($_GET['doctor_id'])? 'Update':'Submit'; ?></button>
                    </div>
                </div>
            </form>


            <?php
            require_once 'database.php';
            require_once 'table_generator.php';
            $result = $conn->query("SELECT actor_id AS '#', first_name FROM actor limit 10");
            $table = tableGenerator($result
                ,array(
                    'delete'=>"http://localhost/labdb/controllers/delete_recept.php?id=",
                    'edit'=>"http://localhost/labdb/controllers/add_recept.php?id="
                    ));
            if ($table != false) {

                echo "<h2 class='sub-header'>Open Receptions</h2>";
                echo "<div class='table-responsive'>";
                echo "<table class='table table-striped'>";

                echo $table;

                echo "</tbody>";
                echo "</table>";
                echo "</div>";
            }
            ?>

        </div>
    </div>
</div>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Just to make our placeholder images work. Don't actually copy the next line! -->
<script src="assets/js/vendor/holder.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>