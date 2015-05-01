
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Gallery</title>

    <link href="<?php echo $css.'bootstrap.min.css'; ?>" rel="stylesheet">
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

</head>

<body>

<nav class="navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand">Portfolio</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li class="active"><a href="<?php echo site_url().'art' ?>">Gallery</a></li>
                <li><a href="<?php echo site_url().'art/add' ?>">Add art</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="<?php echo site_url(); ?>" target="_blank">Open site</a></li>
                <li><a href="<?php echo site_url('Admin/signOut'); ?>">Sign out</a></li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">

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

    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Gallery</h1>
        </div>
    </div>

    <?php foreach($art as $each) { ?>

        <div class="row">
            <div class="col-md-8">
                <a href="<?php echo site_url().'uploads/'.$each->file; ?>">
                    <img class="img-responsive" src="<?php echo site_url().'uploads/'.$each->file; ?>" alt="">
                </a>
            </div>
            <div class="col-md-4">
                <h3><?php echo $each->title; ?></h3>
                <h4>Price: <?php echo $each->price; ?></h4>
                <p><?php echo $each->description; ?></p>
                <div id="actions">
                    <a target="_blank" href="<?php echo site_url().'uploads/'.$each->file; ?>"><span class="glyphicon glyphicon-eye-open"></span></a>
                    <a href="<?php echo base_url().'Art/Edit/'.$each->id; ?>"><span class="glyphicon glyphicon-pencil"></span></a>
                    <a href="<?php echo base_url().'Art/Delete/'.$each->id; ?>" name="delete"><span class="glyphicon glyphicon-remove"></span></a></td>
                </div>
            </div>
        </div>
        <hr>

    <?php } ?>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="<?php echo $js.'bootstrap.min.js' ?>"></script>

</body>
</html>