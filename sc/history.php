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
<h2 >Site menu:</h2>
<?= nav_menu(); ?>
</div>
	
<div id="desc">
<?= desc(); ?>
</div>
    
<div id="main">
<h3>Conferences History</h3>
	<ul>
<li><a href="http://icme2017.azurewebsites.org/" target="_blank">ICME 2017</a>, Hongkong, China</li>				
<li><a href="http://icme2016.azurewebsites.org/" target="_blank">ICME 2016</a>, Seattle, WA</li>			
<li><a href="http://www.icme2015.ieee-icme.org/" target="_blank">ICME 2015</a>, Torino, Italy</li>		
<li><a href="http://www.icme2014.org/" target="_blank">ICME 2014</a>, Chengdu, China</li>	
<li><a href="http://www.ieee-icme.org/icme2013/" target="_blank">ICME 2013</a>, San Jose, US</li>
<li><a href="http://www.ieee-icme.org/icme2012/" target="_blank">ICME 2012</a>, Melbourne, Australia</li>
<li> <a href="http://www.ieee-icme.org/icme2011/" target="_blank">ICME 2011</a>, Barcelona, Spain </li>
<li><a href="http://www.ieee-icme.org/icme2010/" target="_blank">ICME 2010</a>, Singapore</li>
<li><a href="http://www.ieee-icme.org/icme2009/" target="_blank">ICME 2009</a>, New York City, NY, USA</li>
<li><a href="http://www.ieee-icme.org/icme2008/" target="_blank">ICME 2008</a>, Hannover, Germany</li>
<li><a href="http://www.ieee-icme.org/icme2007/" target="_blank">ICME 2007</a>, Beijing, China</li>
<li><a href="https://www.securecms.com/icme2006/" target="_blank">ICME 2006</a>, Toronto, Ontario, Canada
<a href="http://www.ieee-icme.org/icme2006/" target="_blank">[Alternative]</a>
</li>
<li><a href="http://www.ieee-icme.org/icme2005/" target="_blank">ICME 2005</a>, Amsterdam, the Netherlands</li>
<li><a href="http://www.ieee-icme.org/icme2004/" target="_blank">ICME 2004</a>, Taipei, Taiwan</li>
<li><a href="https://www.securecms.com/icme2003/" target="_blank">ICME 2003</a>, Baltimore, Maryland 
<a href="http://www.ieee-icme.org/icme2003/" target="_blank">[Alternative]</a>
</li>
<li><a href="http://www.ieee-icme.org/icme2002/" target="_blank">ICME 2002</a>, Lausanne, Switzerland</li>
<li><a href="http://www.ieee-icme.org/icme2001/" target="_blank">ICME 2001</a>, Tokyo, Japan</li>
<li><a href="http://www.ieee-icme.org/icme2000/" target="_blank">ICME 2000</a>, New York City, NY, USA</li>
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
