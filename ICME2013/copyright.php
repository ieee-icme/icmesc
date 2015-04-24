<?php
include 'include.php';
echoStart();
?>

<h1>Electronic Copyright Form</h1>

<p align="justify">ICME 2013 requires that the copyright of the published papers to be transferred to IEEE. Authors of accepted papers will need to electronically sign a copyright release form. Failure to sign the copyright release form will lead to the paper to not be included in the final proceeding.</p> 

<p align="justify">To electronically sign the copyright release form, please type your paper title, names of all the authors, paper ID, and confirmation email in the form below. If more then one  author has written the paper, then you can type multiple e-mails separated by  commas.</p>

<p align="justify">Once you click the &quot;Copyright Submission&quot; button, it will bring you to IEEE electronic copyright form site. Please follow the instruction to fill in the IEEE Copyright Form electronically.</p>

<p align="justify"><font color="#990000"><strong>Please make sure that you access this page with &quot;www&quot; in the link, i.e.,  &quot;www.icme2013.org/copyright.php&quot; NOT &quot;icme2013.org/copyright.php&quot;. Otherwise, the copyright submission will NOT work.</strong></font></p>

<br />

<form action="https://ecopyright.ieee.org/ECTT/IntroPage.jsp" method="post">
<input type="hidden" name="PubTitle" value="2013 IEEE International Conference on Multimedia and Expo (ICME)">


<span class="highlighted"><strong>Paper Title: </strong></span> 
<input type="text" name="ArtTitle" value="Please type your paper tile here" style="width: 533px" /><br />

<span class="highlighted"><strong>Author Names:</strong></span> 
<input type="text" name="AuthName" value="Please type names of all authors" style="width: 400px" /><br />

<input type="hidden" name="ArtDate" value=="03/01/2013 22:45">
<span class="highlighted"><strong>Paper ID:</strong></span> 
<input type="text" name="ArtId" style="width: 40px" />
&nbsp;  (Please type your paper number. For ICME 2013 workshop paper, please add &lsquo;W&rsquo; before paper number. That is, workshop paper with paper ID 100 should be written as W100.)<br />

<input type="hidden" name="ArtSource" value="MDX">
<span class="highlighted"><strong>E-mail for confirmation: </strong></span>

<input type="text" name="AuthEmail" value="Please type your full e-mail address" style="width: 433px"><br>
<input type="hidden" name="rtrnurl" value=http://www.icme2013.org/copyright.php>

<input name="Submit" type="submit" value="Copyright Submission">

</form>

<p>Please electronically sign copyright release form by the corresponding camera-ready paper deadline.</p>


<?php
echoEnd();
?>