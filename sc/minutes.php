<? include('headerAuth.php'); ?>
<? include('includes.php'); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<meta name="description" content="_your description goes here_" />
<meta name="keywords" content="_your,keywords,goes,here_" />
<meta name="author" content="_your name goes here_ " />

<link rel="stylesheet" type="text/css" href="default.css" media="screen" title="(screen)" />
<link rel="stylesheet" type="text/css" href="print.css" media="print" />

<title>Welcome to IEEE-ICME website</title>
</head>

<body>
<div id="toptabs">
<p>Site Network:
<a class="activetoptab" href="#">Papers</a><span class="hide"> | </span>
<a class="toptab" href="#">Projects</a><span class="hide"> | </span>
<a class="toptab" href="#">Shop</a></p>
</div>

<div id="container">
<div id="logo">
<table width=100%><tr>
        <td align=left><h1><a href="index.html">www.IEEE-ICME.org</a></h1></td>
        <td align=right><img src="images/ieee_banner.png" /> </td>
</tr></table>
</div>

<div id="navitabs">
<h2>Site menu:</h2>
<?= nav_menu(); ?>
</div>

<div id="desc">
<?= desc(); ?>
</div>

<div id="main">
<h3>Meeting Minutes</h3>
	<ul>
<li><a href="Private/SC_March_2014_Minutes.pdf" target="_blank">Mar, 2014</a>, San Jose, US</li>
	</ul>
<br /><br />
</div>

<div id="sidebar">
<h3>Navigation Links</h3>
<?= sidebar_menu(); ?>
<!--
<p><a class="sidelink" href="home.php">Home</a><span class="hide"> | </span>
<a class="sidelink" href="topics.php">Topics</a><span class="hide"> | </span>
<a class="sidelink" href="#">Author Information</a><span class="hide"> | </span>
<a class="sidelink" href="#">Steering Committee</a><span class="hide"> | </span>
<a class="sidelink" href="#">Upcoming conference</a><span class="hide"> | </span>
<a class="sidelink" href="#">Previous conferences</a><span class="hide"> | </span>
<a class="sidelink" href="#">Prize Paper Award</a><span class="hide"> | </span>
<a class="sidelink" href="#">Table of Contents </a><span class="hide"> | </span>
</p>
-->
<h3>IEEE-ICME</h3>
<p><img class="photo" src="images/test.jpg" height="100" width="130" alt="" /></p>

<? echo quote(); ?>
</div>

<div id="footer">
<? footer(); ?>
</div>

</div>
</body>
</html>
