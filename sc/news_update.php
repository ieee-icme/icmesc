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
<b><i>September 2013</i></b><br /> 
The ICME Steering Committee welcomes Chia-Wen Lin, newly elected Chair of the Technical Committee on Multimedia Systems and Applications, as non-voting member to represent Circuits and Systems Society
</div>
<br /><br />

<div class="block">
<b><i>July 2013</i></b><br /> 
ICME2013 has concluded with a great success in San Jose, CA. It has introduced many innovative components including short papers, theme track papers, free tutorial, and industrial tours. Congratulations to the ICME2013 organizing committee and all the volunteers!
</div>
<br /><br />

<div class="block">
<b><i>July 2013</i></b><br /> 
The ICME Steering Committee held its annual meeting at ICME2013. Jin Li has been elected as its next Chair and shall start his tenure from January 1, 2014. The committee also made the selection of ICME2016 and ICME2017 from four competitive bidding teams. The Committee voted for ICME2016 to be held in Seattle, WA in USA and for ICME2017 to be held in Hong Kong, China. Congratulations to the ICME2016 team and the ICME2017 team!
</div>
<br /><br />

<div class="block">
<b><i>April 2013</i></b><br /> 
The ICME Steering Committee welcomes Enrico Magli, appointed by the Chair of the Technical Committee on Multimedia Signal Processing, to represent Signal Processing Society.
</div>
<br /><br />

<div class="block">
<b><i>March 2013</i></b><br /> 
The ICME Steering Committee has sent out Call-for-Proposals for ICME2016 and ICME2017. The ICME2016 bidding is open to North America organizing teams and ICME2017 is open to Asia-Pacific organizing teams.
</div>
<br /><br />

<div class="block">
<b><i>February 2013</i></b><br />
The Steering Committee welcomes four new voting members: Jian Zhang, representing Circuits and Systems Society, Jianfei Cai, Representing Communications Society, Philip Sheu, representing Computer Society, and Homer Chen, representing Signal Processing Society. Their terms are for two years until December 2014.
</div>
<br /><br />



</div> <!-- main_end -->

<br /><br />

<div id="sidebar">
<h3>Navigation Links</h3>
<?= sidebar_menu(); ?>

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

