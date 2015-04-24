<?php
include 'include.php';
echoStart();
?>

<h1>Electronic Copyright Form</h1>

<p align="justify">ICME 2011 requires that the copyright of the published papers to be transferred to IEEE. Authors of accepted papers will need to electronically sign a copyright release form. Failure to sign the copyright release form will lead to the paper to not be included in the final proceeding.</p> 

<p align="justify">To electronically sign the copyright release form, please type your paper title, all names of the authors, paper ID, and confirmation email in the form below.</p>

<p align="justify">Please note one confirmation email will be sent to the general chair (email address already filled), which serves as a confirmation that the authors have signed the copyright release form. Please do not remove the chair&#39;s email when filling the form. Please type your full e-mail address afterwards. If more then one  author has written the paper, then you can type multiple e-mails separated by  commas.</p>

<p align="justify">Once you click the &quot;Copyright Submission&quot; button, it will bring you to IEEE electronic copyright form site. Please follow the instruction to fill in the IEEE Copyright Form electronically.</p>
<br />

<form action="https://ecopyright.ieee.org/ECTT/IntroPage.jsp" method="post">
<input type="hidden" name="PubTitle" value="ICME 2011">


<span class="highlighted"><strong>Paper Title: </strong></span> 
<input type="text" name="ArtTitle" value="Please type your paper tile here" style="width: 533px" /><br />

<span class="highlighted"><strong>Author Names:</strong></span> 
<input type="text" name="AuthName" value="Please type name of all authors" style="width: 400px" /><br />

<input type="hidden" name="ArtDate" value="02/10/2011 21:02">
<span class="highlighted"><strong>Paper ID:</strong></span> 
<input type="text" name="ArtId" style="width: 40px" />&nbsp;  (Please type your paper number. For ICME 2011 workshop paper, please add &lsquo;W&rsquo; before paper number. That is, workshop paper with paper ID 100 should be written as W100.)<br />

<input type="hidden" name="ArtSource" value="IIC">
<span class="highlighted"><strong>E-mail for confirmation [including email 
	confirmation to chair]: </strong></span>

<input type="text" name="AuthEmail" value="locheng@ualberta.ca, [plase type your full e-mail address afterwards]" style="width: 433px"><br>
<input type="hidden" name="rtrnurl" value=http://www.icme2011.org/copyright.php>

<input name="Submit" type="submit" value="Copyright Submission">

</form>

<p>Please electronically sign copyright release form by the corresponding camera-ready paper deadline.</p>


<?php
echoEnd();
?>