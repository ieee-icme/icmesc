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
<b><i>November 2012</i></b><br /> 
The ICME2012 team has worked successfully with Trans. Multimedia (T-MM) to publish expanded version of selected high quality papers from ICME2012 with rigorous reviews by T-MM. An invitation has been sent out to authors of top 5% ranked ICME2012 papers.
</div>
<br /><br />

<div class="block">
<b><i>July 2012</i></b><br /> 
ICME2012 has concluded with a great success in Melbourne, Australia. It has introduced several innovative components including the very interesting research overview talks and time machine plenary sessions. Congratulations to the ICME2012 organizing committee and all the volunteers!
</div>
<br /><br />


<div class="block">
<b><i>July 2012</i></b><br /> 
The ICME Steering Committee held its annual meeting at ICME2012. The committee made the selection of ICME2015 from two competitive bidding teams. The Committee did not make selection for ICME2016 due to lack of competitive proposals. The committee voted for ICME2015 to be held in Torino, Italy. Congratulations to the ICME2015 team!
</div>
<br /><br />

<div class="block">
<b><i>June 2012</i></b><br />
The ICME Steering Committee welcomes Jianwei Huang, newly elected Chair of the Technical Committee on Multimedia Communications, as non-voting member to represent Communications Society
</div>
<br /><br />

<div class="block">
<b><i>April 2012</i></b><br />
The ICME Steering Committee has sent out Call-for-Proposals for ICME2015 and ICME2016. The ICME2015 bidding is open to European organizing teams and ICME2016 is open to North America organizing teams.
</div>
<br /><br />

<div class="block">
<b><i>January 2012</i></b><br />
The ICME Steering Committee welcomes four new voting members: Alexander Loui, representing Circuits and Systems Society, Jin Li, Representing Communications Society, Ashfaq Khokhar, representing Computer Society, and Dinei A.Florencio, representing Signal Processing Society. Their terms are for two years until December 2013.
</div>
<br /><br />

<div class="block">
<b><i>January 2012</i></b><br />
The ICME Steering Committee welcomes Oscar Au, newly elected Chair of the Technical Committee on Multimedia Signal Processing, as non-voting member to represent Signal Processing Society
</div>
<br /><br />

<div class="block">
<b><i>January 2012</i></b><br />
The ICME Steering Committee welcomes Chang Wen Chen to assume the position of Chair for this committee. The Steering Committee conducted the voting in September 2011. His term is for two years from January 2012 to December 2013.
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
			<a href="news2011.php">2011/2010 News</a>
		</b></font>
	</div>

<br /><br />

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

