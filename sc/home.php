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
	<td align=left> <h1> <a href="index.html">www.IEEE-ICME.org</a> </h1> </td>
	<td align=right> <img src="images/ieee_banner.png" /> </td>
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


<h3>International Conference on Multimedia and Expo</h3> 


<br />

With around 1000 submissions and 500 participants each year, the IEEE International Conference on Multimedia & Expo (ICME) has been the flagship multimedia conference sponsored by four IEEE societies since 2000. It serves as a forum to promote the exchange of the latest advances in multimedia technologies, systems, and applications from both the research and development perspectives of the circuits and systems, communications, computer, and signal processing communities.

<br /><br /><br />
<b>ICME was revamped in late 2009 in order to elevate it to the next level. A new charter and a new  steering committee have been created. The main changes are summarized below:</b>
<ul>
<li>Lower the paper acceptance rate to 30% for the main conference (the top 15% for orals and the next 15% for posters).</li>
<li>Increase the page length from 4 pages to up to 6 pages.</li>
<li>Enforce individual sponsoring TCs' ownership of ICME.  Each TC shall elect and appoint a TPC co-chair for the conference, and is directly responsible for the review of most papers in its areas.</li>
<li>Enhance the role of the steering committee. Steering committee voting members shall be elected and appointed by individual TCs from the four sponsoring societies.</li>
</ul>

	<center>
	<div class="block">
		<font size="3"><b>
			<a href="upcoming_conference.php">Upcoming ICME</a> | <a href="previous_conferences.php">Previous ICME</a>
		</b></font>
	</div>
	</center>
<br /><br />

<div>
<h3>ICME is jointly sponsored and owned by the following four IEEE Technical Committees:</h3>
<blockquote>
<a href="http://ieee-cas.org/community/technical-committees/msatc-members" target="_blank">Multimedia Systems & Applications Technical Committee</a>, Circuits and Systems Society
<br /><br />
<a href="http://www.comsoc.org/~mmc/" target="_blank">Multimedia Communications Technical Committee</a>, Communications Society
<br /><br />
<a href="http://www.computer.org/portal/web/tcmc" target="_blank">Technical Committee on Multimedia Computing</a>, Computer Society
<br /><br />
<a href="http://www.signalprocessingsociety.org/technical-committees/list/mmsp-tc/" target="_blank">Multimedia Signal Processing Technical Committee</a>, Signal Processing Society<br /><br />
</blockquote>
</div>


<div align="right">
	<img src="images/sponsors2.gif" />
</div>


</div>

<div id="sidebar">
<h3>Navigation Links</h3>
<?= sidebar_menu(); ?>
<!--
<p>
<a class="sidelink" href="home.php">Home</a><span class="hide"> | </span>
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
