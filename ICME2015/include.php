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
<title>2015 IEEE Internation Conference on Multimedia &amp; Expo (ICME 2015)</title>
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
	//echoLink('techcommittee.php', 'Tech. Program Committee');
	//echoLink('callforproposal.php','Call for Proposal 2013/14');
	echoLink('sponsors.php','Tech. Sponsors & Supporters');
	//echo '<hr/>';
	//echoLink('tmm.php','IEEE TMM Special Issue');
	echo '<hr/>';
	echoLink('callforpapers.php','Call for Papers ');
	//echoLink('authorguide.php','Author Guidelines', true);
	//echoLink('submission.php','Paper Submission', true);
	echoLink('importantdates.php','Important Dates', true);
	//echoLink('acceptedpapers.php','Accepted Papers', true);
	echo '<hr/>';
	//echoLink('program.php','Technical Program');
	//echoLink('programsessions.php','Main Conference Sessions', true);
	//echoLink('keynotes.php','Keynotes/Plenaries');
	//echoLink('workshops.php','Workshops');
	//echoLink('panels.php','Panels');
	//echoLink('tutorials.php','Tutorials');
	//echoLink('industrial.php','Industrial Program');
	//echoLink('exhibition.php','Expo, Demos & Jobs');
	//echoLink('studentprogram.php','Student Program');
	//echoLink('awards.php','Awards, Student Travel Grants');
	//echo '<hr/>';
	//echoLink('presentationguidelines.php','Presentation Guidelines');
	//echoLink('registration.php','Registration');
	//echoLink('program.php','Schedule at a Glance');
	//echoLink('socialevents.php','Social Events');
	//echoLink('sidemeetings.php','Side Meetings');
	//echo '<hr/>';
	echoLink('turininfo.php','Torino Information');
	echoLink('conferencevenue.php','Conference Venue', true);
	echoLink('hotelinformation.php','Hotel Information', true);
	echoLink('travelvisa.php','Travel and Visa', true);
	//echoLink('placesofinterest.php','Places of Interest', true);
	echo '<hr/>';
	//echoLink('photogallery.php','Photo Gallery');
	echo '</div>
<img src="images/sponsors.png" usemap="#logos">
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


function echoEnd(){
	echo '</div>
<div id="copyright">&copy;Copyright 2014-2015 IEEE ICME | ieee.icme2015@gmail.com </div>
</body>
</html>';
}


?>
