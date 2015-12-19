<?php
/**
 * Created by PhpStorm.
 * User: shaya
 * Date: 12/17/2015
 * Time: 6:38 PM
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Clinic automation">
    <meta name="author" content="ShayanYousefian">
    <link rel="icon" href="../../favicon.ico">

    <title>Sign up</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link href="assets/css/ie10-viewport-bug-workaround.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/signin.css" rel="stylesheet">

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

<div class="container">

    <?php if(isset($_GET) && isset($_GET['message'])){ ?>
        <div class="col-md-6 col-md-offset-3">
            <div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Login Error!</strong><?php echo $_GET['message']; ?>
            </div>
        </div>
    <?php } ?>

    <form class="form-signin form-horizontal" action="controllers/signin.php" method="post">
        <h2 class="form-signin-heading">Please sign in</h2>
        <div class="btn-group btn-group-justified" role="group" aria-label="...">
            <a type="button" class="btn btn-primary userTypeSelect" data="patient">Patient</a>
            <a type="button" class="btn btn-default userTypeSelect" data="doctor">Doctor</a>
        </div>
        <input type="hidden" name="userType" id="userType" value="" />

        <input type="email" name="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus
               value="<?php echo (isset($_GET) && is_array($_GET) && isset($_GET['e']))? $_GET['e'] : ''; ?>">

        <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required>

        <button class="btn btn-lg btn-primary btn-block" type="submit">Log In</button>
    </form>


    <div class="modal fade onloadModal" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">Modal title</h4>
                </div>
                <div class="modal-body">
                    <p>One fine body&hellip;</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->


</div> <!-- /container -->


<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script src="assets/js/ie10-viewport-bug-workaround.js"></script>
<script>
    function updateType(type){
        $(".userTypeSelect:not([data='"+type+"'])").removeClass('btn-primary').addClass('btn-default');
        $(".userTypeSelect[data='"+type+"']").removeClass('btn-default').addClass('btn-primary');
        $("#userType").val(type);
    }
    $(document).ready(function(){
        var startType = $(".userTypeSelect:first-child").attr('data');
        updateType(startType);
        //$('.onloadModal').modal('show');
        $(".userTypeSelect").click(function(){
            var type = $(this).attr('data');
            updateType(type);
        });
    });
</script>
</body>
</html>