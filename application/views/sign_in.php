<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin - Sign in</title>
    <link href="<?php echo $css.'bootstrap.css'; ?>" rel='stylesheet' type='text/css' />
    <link href="<?php echo $css.'style.css'; ?>" rel='stylesheet' type='text/css' />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info" >
            <div class="panel-heading" style="background-color:darkred">
                <div class="panel-title" style="color:white">Sign In as administrator</div>
            </div>

            <div style="padding-top:30px" class="panel-body" >
                <?php if(ISSET($error_message)) { ?>
                        <div class="alert alert-danger alert-error">
                            <a href="#" class="close" data-dismiss="alert">&times;</a>
                            <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
                            <?php echo $error_message; ?>
                        </div>
                <?php } ?>
                <?php if(ISSET($success_message)) { ?>
                    <div class="alert alert-success">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                        <?php echo $success_message; ?>
                    </div>
                <?php } ?>
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <form id="loginform" class="form-horizontal" role="form" method="POST" action="<?php echo site_url('admin/signIn'); ?>">
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="password" type="password" class="form-control" name="password" placeholder="password" autofocus="true">
                    </div>
                    <div class="col-sm-24 controls" style="float: right">
                        <input type="submit" id="btn-login" href="#" class="btn btn-danger" value="Sign In">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>