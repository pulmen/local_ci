<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Project App</title>
    <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/style.css">
    <link href="<?php echo base_url();?>open-iconic/font/css/open-iconic-bootstrap.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="<?= base_url(); ?>">MyApp</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
            </li>
            <?php if(!$this->session->userdata('logged_in')): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/users/register">Register</a>
            </li>
            <?php endif; ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/projects">Projects</a>
            </li>
<!--            <li class="nav-item dropdown">-->
<!--                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">-->
<!--                    Dropdown-->
<!--                </a>-->
<!--                <div class="dropdown-menu" aria-labelledby="navbarDropdown">-->
<!--                    <a class="dropdown-item" href="#">Action</a>-->
<!--                    <a class="dropdown-item" href="#">Another action</a>-->
<!--                    <div class="dropdown-divider"></div>-->
<!--                    <a class="dropdown-item" href="#">Something else here</a>-->
<!--                </div>-->
<!--            </li>-->
<!--            <li class="nav-item">-->
<!--                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
<!--            </li>-->
        </ul>
        <ul class="navbar-nav">

            <?php if($this->session->userdata('logged_in')): ?>
            <li class="nav-item">
                <a class="nav-link" href="<?= base_url(); ?>/users/logout">Logout</a>
            </li>
            <?php endif; ?>

        </ul>
<!--        <form class="form-inline my-2 my-lg-0">-->
<!--            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">-->
<!--            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>-->
<!--        </form>-->
    </div>
</nav>

<div class="container">
    <div class="row">
        <div class="col-3">
            <?php
            $this->load->view('users/login_view');
            ?>
        </div>
        <div class="col-9">
            <?php
                $this->load->view($main_view);
            ?>
        </div>
    </div>
</div>

</body>
</html>