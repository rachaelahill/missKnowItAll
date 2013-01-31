<!doctype html>
<html lang="en">
<!--  ==================== INFORMATION ====================	
  Author:  Rachael Hill
  Project: Miss Know It All - Advice Blog
  Date: 01/31/2013
======================================================= -->	
<head>
  <meta charset="utf-8">
  <title>Miss Know It All</title>
  <meta name="description" content="Advice blog">
  <meta name="author" content="Rachael">
  <link rel="stylesheet" href="<?=base_url();?>incs/css/screen.css" type="text/css" media="screen"/>
  <link rel="stylesheet" href="<?=base_url();?>incs/css/flexipage.css" type="text/css" media="screen"/>
  <!-- FONTS -->
  <link href='http://fonts.googleapis.com/css?family=Arizonia|Fanwood+Text' rel='stylesheet' type='text/css'>  
  <!--[if lt IE 9]>
  <![endif]-->
</head>
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
       <h2 class="unanswered"><? if($page == 'unanswered'){echo anchor('admin/', 'Unanswered', array('class' => 'active'));}else{echo anchor('admin/', 'Unanswered');}?></h2>
       <h2 class="answered"><? if($page == 'answered_posts'){echo anchor('admin/answered_posts', 'Answered', array('class' => 'active'));}else{echo anchor('admin/answered_posts', 'Answered');}?></h2>
   <? }?>
   </header>