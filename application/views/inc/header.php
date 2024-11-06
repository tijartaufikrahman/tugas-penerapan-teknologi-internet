<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>PT. Ujung Berung </title>
<meta content='width=device-width, initial-scale=1, maximum-scale=1,
user-scalable=no' name='viewport'>
<!-- bootstrap 3.0.2 -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<!-- font Awesome -->
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
<!-- Ionicons -->
<link href="css/ionicons.min.css" rel="stylesheet" type="text/css" />
<!-- Theme style -->
<link href="css/AdminLTE.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <!-- header logo: style can be found in header.less -->
<header class="header">
<a href="<?php echo base_url(); ?>" class="logo">
<!-- Add the class icon to your logo image or logo icon to add
the margining -->
Ujungberung
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top" role="navigation">
<!-- Sidebar toggle button-->

<a href="#" class="navbar-btn sidebar-toggle" data-
toggle="offcanvas" role="button">

<!-- <span class="sr-only">Toggle navigation</span> -->
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>
<!-- User toggle button -->
<div class="navbar-right">
<ul class="nav navbar-nav">
<li class="dropdown user user-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<i class="glyphicon glyphicon-user"></i>
<span><?php echo $this->session->userdata('nama'); ?> <i
class="caret"></i></span>
</a>
<ul class="dropdown-menu">
<!-- User image -->
<li class="user-header bg-light-blue">
<img src="img/avatar04.png" class="img-circle"
alt="User Image" />
<p>
<?php echo $this->session->userdata('nama'); ?>
<small><?php echo $this->session->userdata('role'); ?></small>
</p>
</li>
<!-- Menu Footer-->
<li class="user-footer">
<div class="pull-left">
<a href="#" class="btn btn-default btn-flat"
disabled>Profile Setting</a>
</div>

<div class="pull-right">

<a href="<?php echo site_url('home/logout'); ?>"
class="btn btn-default btn-flat">Sign out</a>
</div>
</li>
</ul>
</li>
</ul>
</div>
</nav>
</header>
</body>
</html>

