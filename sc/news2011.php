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


<h3>News</h3>

<div class="block">
<b><i>August 2011</i></b><br /> 
The IEEE Transactions on Multimedia (TMM)  Steering Committee has approved a special issue of TMM dedicated to ICME2011 to be published early 2012.
</div>
<br /><br />

<div class="block">
<b><i>July 2011</i></b><br /> 
The ICME steering committee has approved ICME 2013 to be held in San Jose/Francisco, US, and ICME 2014 to be held in Chengdu, China. There were a total of five competing full proposals. Congratulations to the ICME2013 team and the ICME2014 team!
</div>
<br /><br />

<div class="block">
<b><i>July 2011</i></b><br /> 
ICME2011 has concluded with a great success in Barcelona. It had a record number of participants and the most diverse program in the ICME history. Congratulations to the ICME2011 organizing committee and all the volunteers!
</div>
<br /><br />

<div class="block">
<b><i>June 2011</i></b><br /> 
A special issue dedicated to ICME2010 has been published in the June issue of the IEEE Transactions on Multimedia. Congratulations to the ICME 2010 Guest Editorial Team!
</div>
<br /><br />

<div class="block">
<b><i>January 2011</i></b><br /> 
The ICME Steering Committee is soliciting proposals to organize ICME 2013 and 2014. Letter of intent is due April 1, 2011, and full proposal is due June 1. For more information, please see the <a href="ICME_call_for_proposals_2013_2014.pdf">Call for Proposals</a>
</div>
<br /><br />

<div class="block">
<b><i>July 2010</i></b><br /> The ICME steering committee has approved ICME 2011 to be held in Barcelona, Spain, and ICME 2012 to be held in Melbourne, Australia. Congratulations to the ICME2011 team and the ICME2012 team!
</div>
<br /><br />

<div class="block">
<b><i>July 2010</i></b><br /> ICME2010 has concluded with a great success in Singapore. Congratulations to the ICME2010 organizing committee and all the volunteers! 
</div>
<br /><br />

<div class="block">
<b><i>Feb. 2010</i></b><br /> ICME is soliciting proposals to host 2011 and 2012 conference editions. <a href="http://www.ieee-icme.org/ICME2011-2012_Proposal_Invitation.pdf" target="_blank">See the invitation</a>. Deadline for letter of intent: <font color="#FF0000" style="font:bold"><b>March 15, 2010</b></font>
</div>

<br /><br />

	<div class="block">
		<font size="3"><b>
			<a href="news.php">Latest News</a>
		</b></font>
	</div>

	<br /><br />

	<div class="block">
		<font size="3"><b>
			<a href="news2012.php">2012 News</a>
		</b></font>
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

