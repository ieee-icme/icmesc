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

<br />
<center><h1>ICME Steering Committee</h1></center>

<h2>Past Chairs:</h2>
	<blockquote>
		<b><i>Wenjun Zeng</i></b>, University of Missouri, USA (ICME Steering Committee Chair, Jan. 2010 - Dec. 2011; Pre- and Interim Steering Committee ComSoc representative, June 2009 - Dec. 2009)<br /><br />
			<hr />
		<b><i>Philip A. Chou</i></b>, Microsoft Research, USA (Interim Steering Committee Chair, Sept. 2009 - Dec. 2009)<br /><br />
			<hr />
		<b><i>Ching-Yung Lin</i></b>, IBM Watson Research Center, USA (Pre- Steering Committee Lead, June 2009 - Aug. 2009)<br /><br />
			<hr />
	</blockquote>

<h3>Past Members</h3>
	<blockquote>
	
<b>Bin Wei</b>, AT&T research, USA(ComSoc representative) (Jan. 2010 - Dec. 2011)<br /><br />
<b>Arif Ghafoor</b>, Purdue University, USA(Computer Society representative) (Jan. 2010 - Dec. 2011)<br /><br />
<b>Jiebo Luo</b>, Kodak Research Laboratories, USA(SPS representative) (Jan. 2010 - Dec. 2011)<br /><br />
<b>Ching-Yung Lin</b>, IBM Watson Research Center, USA (C&S MSATC Chair, Jan. 2010 - Dec. 2011; Interim Steering Committee C&S Society representative, Sept. 2009 - Dec. 2009)<br /><br />
<b>Philip A. Chou</b>, Microsoft Research, USA (SPS MMSP TC Chair, Jan. 2010 - Dec. 2011)<br /><br />

		<b>Oscar C. Au</b>, Hong Kong University of Science and Technology, Hong Kong (ICME2010 General Chair) (June 2009- July 2011)<br /><br />
		<b>Gabriel Fermandez</b>, URL, Spain (ICME2011 General Chair) (July 2010 - July 2011)<br /><br />
		<b>Jean-Luc Dugelay</b>, EURECOM, France (ComSoc representative) (Jan.  2010 - Dec.  2010)<br /><br />
		<b>Jeffrey J. P. Tsai</b>, University of Illinois at Chicago, USA (Computer Society representative) (Sept.  2009 - Dec.  2010)<br /><br />
		<b>Eckehard Steinbach</b>, Munich University of Technology, Germany  (SPS representative) (Jan.  2010 - Dec.  2010)<br /><br />
		<b>Sheila Hemami</b>, Cornell University, USA (TMM EiC) (Sept.  2009 - Dec.  2010)<br /><br />
		<b>Phil Sheu</b>, University of California, Irvine, USA  (Computer Society TCMC Chair)  (June  2009 - Sept.  2010)<br /><br />
		<b>Qian Zhang</b>, Hong Kong University of Science and Technology, Hong Kong  (ComSoc MMTC Chair) (June 2009 - July 2010)<br /><br />
		<br />
		<b>Zhengyong Zhang</b>, Microsoft Research, USA (Pre- and Interim Steering Committee SPS representative) (June 2009 - Dec. 2009)<br /><br />
		<b>Fernando Pereira</b>, Instituto Superior Técnico, Lisbon, Portugal (Pre- and Interim Steering Committee SPS representative) (June 2009 - Dec. 2009)<br /><br />
		<b>John Apostolopoulos</b>, HP Labs, (Pre- Steering Committee SPS representative) (June 2009 - Sept. 2009)<br /><br />
		<b>Pascal Frossard</b>, EPFL, Switzerland (Pre- Steering Committee ComSoc representative) (June 2009 - Sept. 2009)<br /><br />
		<b>Gary Chan</b>, Hong Kong University of Science and Technology, Hong Kong  (Pre- Steering Committee ComSoc representative) (June 2009 - Sept. 2009)<br /><br />
		
	</blockquote>

</div>

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
