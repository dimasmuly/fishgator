<!DOCTYPE html>
<!--
Template Name: Nekmit
Author: <a href="https://www.os-templates.com/">OS Templates</a>
Author URI: https://www.os-templates.com/
Copyright: OS-Templates.com
Licence: Free to use under our free template licence terms
Licence URI: https://www.os-templates.com/template-terms
-->
<html lang="">
<!-- To declare your language - read more here: https://www.w3.org/International/questions/qa-html-language-declarations -->
<head>
<title>FishGator Website</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="<?= base_url()?>assets/frontend/styles/layout.css" rel="stylesheet" type="text/css" media="all">
</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay padtop" style="background-image:url('images/demo/backgrounds/logo.jpg');"> 
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <header id="header" class="hoc clear">
    <div id="logo" class="fl_left"> 
      <!-- ################################################################################################ -->
      <h1><a>FishGator</a></h1>
      <!-- ################################################################################################ -->
    </div>
    <nav id="mainav" class="fl_right"> 
      <!-- ################################################################################################ -->
      <ul class="clear">
        <li class="active"><a href="#"><h1>Home</h1></a></li>
        <li><a href="<?php echo site_url('Artikel')?>"><h1>Artikel</h1></a></li>
        <li><a href="<?php echo site_url('News')?>"><h1>News</h1></a></li>
        <li><a class="drop" href="#"><h1>Project Kami</h1></a>
          <ul>
            <li><a href="<?php echo site_url('project_kami/kolam_bioflog')?>"><h1>Kolam BioFlog</h1></a></li>
            <li><a href="<?php echo site_url('project_kami/kolam_tambak')?>"><h1>Kolam Tambak</h1></a></li>
            <li><a href="<?php echo site_url('project_kami/hatchery')?>"><h1>Hatchery</h1></a></li>
          </ul>
        </li>
        <li><a class="drop" href="#"><h1>Tentang Kami</h1></a>
        <ul>
            <li><a href="<?php echo site_url('tentang_kami/visi_misi')?>"><h1>Visi & Misi</h1></a></li>
            <li><a href="<?php echo site_url('tentang_kami/profile_perusahaan')?>"><h1>Profile Perusahaan</h1></a></li>
            <li><a href="<?php echo site_url('tentang_kami/contact_us')?>"><h1>Contact Us</h1></a></li>
          </ul>
          <li><a href="<?php echo site_url('auth/login')?>"><h1>Login</h1></a></li>
        </li>
      </ul>
      <!-- ################################################################################################ -->
    </nav>
  </header>