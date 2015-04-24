<?php
function echoLink($href, $innerHTML, $indentedLink = false, $targetblank = false){
	echo '<a href="' . $href . '" class="navLink' . (($indentedLink) ? ' indented' : '') . '"' . (($targetblank) ? ' target="_blank"' : '') . '>' . $innerHTML . '</a><br/>';
}

function echoStart(){
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<title>2013 IEEE International Conference on Multimedia &amp; Expo (ICME 2013)</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<div id="top"></div>
<div id="leftContainer">
<div id="navigate">';

	echoLink('index.php','Home');
	echo '<hr/>';
	echoLink('organizingcommittee.php','Organizing Committee');
	echoLink('steeringcommittee.php','Steering Committee');
	echoLink('sponsors.php','Tech. Sponsors & Supporters');
	echo '<hr/>';
	echoLink('callforpapers.php','Call for Papers ');
	echoLink('authorguide.php','Author Guidelines', true);
	echoLink('submission.php','Paper Submission', true);
	echoLink('crsubmission.php','Camera-Ready Submission', true);
	echoLink('importantdates.php','Important Dates', true);
	echo '<hr/>';
	echoLink('program.php','Technical Program');
	echoLink('awards.php','Awards', true);
	echoLink('programsessions.php','Main Conference Sessions', true);
	echoLink('keynotes.php','Keynotes');
	echoLink('industrialtalks.php','Industrial Talks');
	echoLink('workshops.php','Workshops');
	echoLink('workshopsessions.php','Workshop Sessions', true);
	echoLink('tutorials.php','Tutorials');
	echoLink('themetrack.php','Theme Track');
	echoLink('shortpapers.php','Short Paper Program');
	echoLink('expo.php','Expo');
	echoLink('cfd.php','Demos');
	echo '<hr/>';
	echoLink('presentationguidelines.php','Presentation Guidelines');
	echoLink('registration.php','Registration');
	echoLink('volunteer.php','Student Volunteers');
	echoLink('studenttravelgrants.php','Student Travel Grants');
	echoLink('sidemeetings.php','Side Meetings');
	echo '<hr/>';
	echoLink('','San Jose Information');
	echoLink('conferencevenue.php','Conference Venue', true);
	echoLink('hotelinfo.php','Hotel Information', true);
	echoLink('travelvisa.php','Travel and Visa', true);
	echoLink('placesofinterest.php','Places of Interest', true);
	echoLink('dining.php','Dining Information', true);
	echo '<hr/>';
	echoLink('','Previous Conferences');
	echoLink('icme2011/index.php','ICME 2011', true);
	echo '</div>
<img src="images/sponsors/sponsors.png" usemap="#logos">
<map name="logos">
<area shape="rect" coords="15,10,185,70" href="http://www.ieee.org" target="_blank">
<area shape="rect" coords="55,70,145,160" href="http://www.ieee-cas.org" target="_blank">
<area shape="rect" coords="30,180,170,307" href="http://www.comsoc.org" target="_blank">
<area shape="rect" coords="15,332,185,393" href="http://www.computer.org" target="_blank">
<area shape="rect" coords="5,417,190,459" href="http://www.signalprocessingsociety.org" target="_blank">
</map>
</div>
<div id="mainContent">';
}

function echoSponsor() {
	echo '</div>
	<div id="bottomContainer">
	<h2 style="margin-left:15px">Sponsors</h2>
	<div align="center">
	<a href="http://www.albertatechfutures.ca/" target="_blank" class="sponsorImage"><img src="images/sponsors/sponsor-aitf.png" height="200"/></a>
	<a href="http://www.intel.com/" target="_blank" class="sponsorImage"><img src="images/sponsors/sponsor-intel.png" height="200"/></a>
	<a href="http://www.cisco.com/" target="_blank" class="sponsorImage"><img src="images/sponsors/sponsor-cisco.png" height="160"/></a>
	<a href="http://www.scu.edu/engineering/" target="_blank" class="sponsorImage"><img src="images/sponsors/sponsor-scu.png" height="140"/></a>
	<a href="http://www.disneyresearch.com/" target="_blank" class="sponsorImage"><img src="images/sponsors/sponsor-disney.png" height="140"/></a>
	<a href="http://research.microsoft.com/" target="_blank" class="sponsorImage"><img src="images/sponsors/sponsor-msr.png" height="140"/></a>
	<a href="http://www.research.ibm.com/" target="_blank" class="sponsorImage"><img src="images/sponsors/sponsor-ibmresearch.png" height="120"/></a>
	<a href="http://www.asu.edu/" target="_blank" class="sponsorImage"><img src="images/sponsors/sponsor-asu.png" height="110"/></a>
	<a href="http://www.taylorandfrancis.com/" target="_blank" class="sponsorImage"><img src="images/sponsors/sponsor-taylorfrancis.png" height="100"/></a>
	</div>
	</div>';
}

function echoEnd(){
	echo '</div>
<div id="copyright">&copy;Copyright 2012-2013 IEEE ICME | Contact: webmaster@icme2013.org</div>
</body>
</html>';
}


?>
