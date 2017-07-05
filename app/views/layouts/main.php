<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="">
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/jquery-ui.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
    <style type="text/css">
        .ui-icon, .ui-widget-content .ui-icon {
            background-image: url(<?php echo base_url(); ?>assets/images/ui-icons_444444_256x240.png);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-default navbar-static-top" style="border-bottom: 0;">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="<?php echo base_url(); ?>">Project1</a>
        </div>
        <!-- /.navbar-header -->
        <div class="navbar-text pull-right" style="padding-right: 15px;">
            <?php if($this->session->userdata('logged_in')) : ?>
                <a href="<?php echo base_url(); ?>users/logout">Logout</a>
            <?php else : ?>
                <a href="<?php echo base_url(); ?>users/register">Register</a>
            <?php endif; ?>
        </div>
    </nav>
    <div class="col-md-3" style="padding-left: 15px;">
        <?php if($this->session->userdata('logged_in')) : ?>
            <div class="panel panel-default">
                <div class="panel-heading"><h4 style="margin: 5px 0;">Dashboard</h4></div>
                <ul class="list-group">
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>dishonored_checks">Dishonored Checks</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>taxpayers">Taxpayers</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>districts">Districts</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>tax_types">Tax Types</a></li>
                    <li class="list-group-item"><a href="<?php echo base_url(); ?>dishonor_reasons">Dishonor Reasons</a></li>
                    <?php if($this->session->userdata('level') == 'admin') : ?>
                        <li class="list-group-item"><a href="<?php echo base_url(); ?>users">Users</a></li>
                    <?php endif; ?>
                </ul>
            </div>
        <?php else: ?>
            <div class="panel panel-default">
                <div class="panel-heading"><h4 style="margin: 5px 0;">User Login</h4></div>
                <div class="panel-body">
                    <?php echo form_open('users/login'); ?>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input class="form-control" type="text" name="username">
                        </div>
                        <div class="form-group">
                            <label for="Password">Password</label>
                            <input class="form-control" type="password" name="password">
                        </div>
                        <div style="padding-top: 5px;">
                            <input class="btn btn-primary btn-block" type="submit" name="login" value="Login">
                        </div>
                    <?php echo form_close(); ?>
                </div>
            </div>
        <?php endif; ?>
    </div>
    <!-- /.col-md-3 -->
    <div class="col-md-9">
        <?php $this->load->view($main_content); ?>
    </div>
    <!-- /.col-md-9 -->
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="http://localhost/project1/assets/js/app.js"></script>
</body>
</html>
