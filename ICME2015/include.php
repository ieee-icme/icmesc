<?php
function echoLink($href, $innerHTML, $indentedLink = false, $targetblank = false){
	echo '<a href="' . $href . '" class="navLink' . (($indentedLink) ? ' indented highlighted ' : '') . '"' . (($targetblank) ? ' target="_blank"' : '') . '>' . $innerHTML . '</a><br/>';
}

function echoStart(){
	echo '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/> 
<title>2015 IEEE International Conference on Multimedia &amp; Expo (ICME 2015)</title>
<link rel="stylesheet" href="style.css" type="text/css"/>
</head>
<body>
<div id="top"></div>
<div id="leftContainer">
<div id="navigate">';
	
	echoLink('index.php','Home');
		
	echo '<hr/>';
	echo '<font color= #0000A0> COMMITTEES </font>'.'<br/>';
	echo '<hr/>';
	echoLink('organizingcommittee.php','Organizing Committee', true);
	echoLink('steeringcommittee.php','Steering Committee', true);
	echoLink('techcommittee.php', 'Tech. Program Committee', true);
	echoLink('reviewers.php', 'Reviewers', true);
	//echoLink('callforproposal.php','Call for Proposal 2013/14');
	echoLink('sponsors.php','Call for Tech. Sponsors ', true);
	//echo '<hr/>';
	//echoLink('tmm.php','IEEE TMM Special Issue');
	echo '<hr/>';
	echo '<font color= #0000A0> SUBMISSION INFO </font>'.'<br/>';
	echo '<hr/>';
       echoLink('callforchallenges.php','Call for Grand Challenges ', true);
	echoLink('callforpapers.php','Call for Papers ', true);
	echoLink('callforsessions.php','Call for Special Sessions ', true);
	echoLink('cfw.php','Call for Workshops ', true);
	echoLink('cft.php','Call for Tutorials ', true);
       echoLink('cfd.php','Call for Demos', true);
       echoLink('cfi.php','Call for Industry Track Papers', true);
       echoLink('cfeu.php','Call for EU Projects Papers', true);
	echoLink('cfow.php','Call for Ongoing Work', true);
	echoLink('authorguide.php','Author Guidelines', true);
	echoLink('cameraready.php','Camera Ready Submission', true);
	echoLink('submission.php','Paper Submission', true);
	echoLink('importantdates.php','Important Dates', true);
	echo '<hr/>';
	//echoLink('program.php','Technical Program');
	//echoLink('programsessions.php','Main Conference Sessions', true);
	//echoLink('keynotes.php','Keynotes/Plenaries');
	//echoLink('workshops.php','Workshops');
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
	echo '<font color= #0000A0> VENUE AND TRAVEL  </font>'.'<br/>';
	echo '<hr/>';
	echoLink('registration.php','Registration', true);
	echoLink('conferencevenue.php','Conference Venue', true);
	echoLink('hotelinformation.php','Acccommodation', true);
	echoLink('travelvisa.php','Travel and Visa', true);
	echoLink('travelgrants.php','Travel Grants',true);
	echoLink('turininfo.php','Torino Short Info', true);
	echoLink('placesofinterest.php','Places of Interest', true);
	echo '<hr/>';
       echo '<font color= #0000A0> TECHNICAL PROGRAM  </font>'.'<br/>';
	echo '<hr/>';
	echoLink('photogallery.php','ICME 2015 Photo Gallery', true);
	echoLink('awards.php','ICME 2015 Awards', true);
	echoLink('presentationguidelines.php','Presentation Guidelines', true);
	echoLink('glance.php','Program at a Glance', true);
	echoLink('program.php','Technical Program', true);
	echoLink('demo.php','Demo', true);
	echoLink('industry_forum.php','Industry Tracks', true);
	//echoLink('programsessions.php','Special Sessions', true);
	echoLink('EU_track.php','EU Projects Track', true);
	echoLink('ongoing_work.php','Ongoing Work Track', true);
	echoLink('2035.php','Multimedia 2035 Special Session', true);
	echoLink('keynotes.php','Plenaries', true);
	echoLink('workshops.php','Workshops', true);
	echoLink('challenges.php','Grand Challenges', true);
	echoLink('panels.php','Panels', true);
	echoLink('tutorials.php','Tutorials', true);
	echoLink('overview.php','Overview Talks', true);
	echoLink('mixer.php','Student-Industry Mixer', true);
	echoLink('side.php','Side Meetings', true);
	//echoLink('industrial.php','Industrial Program');
	//echoLink('exhibition.php','Expo, Demos & Jobs');
	//echoLink('studentprogram.php','Student Program');
	//echoLink('awards.php','Awards, Student Travel Grants');
	echo '<hr/>';
       echo '<font color= #0000A0> SPONSORS  </font>'.'<br/>';
	echo '<hr/>';
	echoLink('sponsor.php','Sponsors and Grand Challenge Hosts', true);

	
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
