<!doctype html>
<html lang="en">
<!--  ==================== INFORMATION ====================	
  Author:  Rachael Hill
  Project: Miss Know It All - Advice Blog
  Date: 01/01/2013
======================================================= -->	
<head>
  <meta charset="utf-8">
  <title>Miss Know It All</title>
  <meta name="description" content="Advice blog">
  <meta name="author" content="Rachael">
  <link rel="stylesheet" href="<?=base_url();?>incs/css/screen.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="<?=base_url();?>incs/css/flexipage.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="<?=base_url();?>incs/css/jquery.ketchup.css" type="text/css" media="screen"/>
  <!-- FONTS -->
  <link href='http://fonts.googleapis.com/css?family=Arizonia|Fanwood+Text' rel='stylesheet' type='text/css'> 
  <!-- FAVICON -->
  <link rel="shortcut icon" href="<?=base_url();?>incs/img/favicon.png" type="image/png"> 
  <!--[if lt IE 9]>
  <![endif]-->
</head>
<noscript>
 For full functionality of this site it is necessary to enable JavaScript.
 Here are the <a href="http://www.enable-javascript.com/" target="_blank">
 instructions how to enable JavaScript in your web browser</a>.
</noscript>
<body>
<!--  ==================== HEADER ====================	-->	
	<header>
  	<? $admin['logged_in'] = $this->session->userdata('logged_in');
  	  if(empty($admin['logged_in'])){?>
  	    <h1 class="logo-name"><?=anchor('admin/', 'Miss Know It All');?></h1>
  	    <p class="logo-image">Bow</p>
   <? }else{?>
       <h1 class="welcome">Welcome,</h1>
       <p class="log-out"><?=anchor('admin/log_out', 'Log Out');?></p>
       <h1 class="logo-name"><?=anchor('admin/', 'Miss Know It All');?></h1>
       <p class="logo-image">Bow</p>
       <h2 class="unanswered"><? if($this->uri->segment(2) == '' || $this->uri->segment(4) == 'unanswered_posts'){echo anchor('admin/', 'Unanswered', array('class' => 'active'));}else{echo anchor('admin/', 'Unanswered');}?></h2>
       <h2 class="answered"><? if($this->uri->segment(2) == 'answered_posts' || $this->uri->segment(4) == 'answered_posts'){echo anchor('admin/answered_posts', 'Answered', array('class' => 'active'));}else{echo anchor('admin/answered_posts', 'Answered');}?></h2>
   <? }?>
   </header>