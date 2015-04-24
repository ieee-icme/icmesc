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

<h1>ICME Steering Committee</h1>

<h3>Chair</h3>
    <blockquote><h4>
    	Chang Wen Chen, State University of New York at Buffalo, USA
    </h4></blockquote>


<br />
<h2><i>Voting Members (Society Representatives)</i></h2>

  <h3>Circuits and Systems Society</h3>
    <blockquote>
	<b>Alexander C. Loui</b>, Eastman Kodak Company, USA <br /><br />
    <b>Yong Rui</b>, Microsoft, China <br />
	</blockquote>

  <h3>Communications Society</h3>
    <blockquote>
		<b>Khaled El-Maleh</b>, Qualcomm, USA<br /><br />
    	<b>Jin Li</b>, Microsoft Research, USA
	</blockquote>

  <h3>Computer Society</h3>
  	<blockquote>
	<b>Ashfaq Khokhar</b>, University of Illinois at Chicago, USA<br /><br />
	<b>Mei-Ling Shyu</b>, University of Miami, USA
 	</blockquote>
 

  <h3>Signal Processing Society</h3>
  	<blockquote>
    <b>Dinei A.Florencio</b>, Microsoft Research, USA<br /><br />
    <b>Yap-Peng Tan</b>, Nanyang Technological University, Singapore
	</blockquote>
	
<h3>Non-voting Members</h3>
	<blockquote>
    <b>Yen-Kuang Chen</b>, Intel, USA(C&S MSATC Chair)<br /><br />
	<b>Haohong Wang,</b> Cisco, USA (ComSoc MMTC Chair)<br /><br />
    <b>Shu-Ching Chen</b>, Florida International University, USA (CS TCMC Chair)<br /><br />
    <b>Oscar Au</b>, Hong Kong University of Science and Technology, Hong Kong(SPS MMSP TC Chair)<br /><br />
	<b>Mihaela van der Schaar</b>, University of California at Los Angeles, USA (TMM EiC)<br /><br />
	<b>Irene Cheng</b>, University of Alberta, Canada (ICME2011 General Chair)<br /><br />
	<b>Jian Zhang</b>,  University of Technology, Sydney,  Australia (ICME2012 General Chair)<br /><br />
	

	</blockquote>
<h3>Administration</h3>
	<blockquote>
    <b>Lisa Schwarzbek</b>, IEEE Signal Processing Society <br /><br />
    <b>Linda Skeahan</b>, IEEE Signal Processing Society
	</blockquote>
	
<br />

	
<h3><a href="past_members.php">Past Members</a></h3>

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


<!-- 

<div class="block">
 
<b><i>Feb. 2010</i></b><br /> <font color="#FF0000">ICME is soliciting proposals to host 2011 and 2012 conference editions. <a href="http://www.ieee-icme.org/ICME2011-2012_Proposal_Invitation.pdf" target="_blank">See the invitation</a>. Deadline for letter of intent: <b>March 15, 2010</b></font>
<div class="block">
<b><i>July 2011</i></b><br /><br />
<font color="#FF0000"></font>
The ICME steering committee has approved ICME 2013 to be held in San Jose/Francisco, US, and ICME 2014 to be held in Chengdu, China. There were a total of five competing full proposals. Congratulations to the ICME2013 team and the ICME2014 team! 
</div>

<b><i>August 2011</i></b><br /><br />
<font color="#FF0000"></font>
The IEEE Transactions on Multimedia (TMM)  Steering Committee has approved a special issue of TMM dedicated to ICME2011 to be published early 2012.
</div>


 -->