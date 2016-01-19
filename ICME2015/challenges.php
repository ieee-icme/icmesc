<?php
include 'include.php';
echoStart();
?>
<style type="text/css">
.coffee {  background-color: #ffff99;
}
.day {  background-color: #ff99ff;
}
.lunch {  background-color: #ffcc99;
}
.time {  background-color: #33ccff;
}
</style>


<h1>Grand Challenges</h1>

<p>The following Grand Challenges are to be held in conjunction with ICME 2015.</p>
<p>Please refer to the single Grand Challenge web pages for instructions on call for papers and submission deadlines.</p>

<br />
<br />

<h2><a href="http://research.microsoft.com/en-us/projects/irc/" target="_blank">MSR-Bing Grand Challenge: Image Retrieval</a></h2>
<p align="justify">With the success of the 1st, 2nd, and 3rd MSR-Bing Image Retrieval Challenge (MSR-Bing IRC) at ACM Multimedia 2013/2014 and ICME 2014, Microsoft Research in partnership with Bing is happy to propose the 4th MSR-Bing IRC at ICME 2015. </p>

<p align="justify">Do you have what it takes to build the best image retrieval system? Enter this Challenge to develop an image scoring system for a search query. In doing so, you can:
<ul>
<li>Try out your image retrieval system using real world data; </li>
<li>See how it compares to the rest of the community’s entries; </li>
<li>Get to be a contender for ICME 2015 Grand Challenge; </li>
<li>Be eligible to win a cash prize.</li>
</ul></p>

<p align="justify">The topic of the Challenge is web image retrieval. The contestants are asked to develop systems to assess the effectiveness of query terms in describing the images crawled from the web for image search purposes. A contesting system is asked to produce a floating-point score on each image-query pair that reflects how relevant the query could be used to describe the given image, with higher numbers indicating higher relevance. The dynamic range of the scores does not play a significant role so long as, for any query, sorting by its corresponding scores for all its associated images give the best retrieval ranking for these images. </p>

The reference dataset can be found here: <a href="http://research.microsoft.com/en-us/projects/irc/" target="_blank">challenge website</a>

<p><strong>Evaluation Criteria</strong></p>

<p align="justify">Each entry to the Challenge is ranked by its respective Discounted Cumulated Gain (DCG) measure against the test set. In the evaluation stage, you will be asked to download one compressed file (evaluation set) which contains two files in text formats. One is a list of key-query pairs, and the other is a list of key-image pairs. You will be running your algorithm to give a relevance score for each pairs in the first file, and the image content, which will be Base64 encoded JPEG files, can be found in the second file through the key.</p>

<p align="justify">The evaluation set, which is encrypted, will be available for downloading 2 to 3 days before the challenge starts. A password will be delivered to all participants to decrypt the evaluation set when the challenge starts.</p>

<p align="justify">One full day (24 hours) will be given to the participants to do predictions on all the query-image pairs in the evaluation set. Before the end of the challenge, participants need to submit the evaluation results (which is a TSV file containing a list of triads: key, query, score) to a CMT system (will be announced at: http://research.microsoft.com/irc/ ). The order of the triads in the text file is not important. Running prediction in parallel is encouraged.</p>

<p align="justify">The evaluation set will be different from what we used last year. The number of query-image pairs will be increased significantly this time. A trial set will be available around one week before the start of the challenge.</p>

<p><strong>Submission Guidelines</strong></p>
<p align="justify">One team can submit up to 3 runs in 3 zipped text files, and each file corresponds to the results of one run. The team need to clearly specify one of the run as the “master” run, which will be used for final ranking. The results for other runs will be also sent back to the teams for their reference.</p>

<p align="justify"> Detailed information including dates and submission entrance will be announced in the <a href="http://research.microsoft.com/en-us/projects/irc/" target="_blank">challenge website</a></p>

<p><strong>Schedule</strong></p>
<ul>
<li>Final evaluation set available for download (encrypted): April 21</li>
<li>Evaluation start: April 24 </li>
<li>Evaluation end: April 25,  at 0:00AM PDT</li>
<li>Evaluation result announcement: April 28</li>
<li>Challenge paper submission: May 1</li>
<li>Acceptance notification: May 10</li>
<li>Camera Ready: May 15</li>
</ul>

<p><strong>Grand Challenge Coordinator</strong></p>
<p>Xian-Sheng Hua (xshua@microsoft.com), Yuxiao Hu (yuxiao.hu@microsoft.com) </p>
<br />
<br />



<?php
echoEnd();
?>
</p>
