<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
  <head>
    <title>ICME 2006</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="CommonFiles/icme2006.css">

    <style type="text/css" media="print">
<!--
    #MenuBlock { display: none; }
    #ContentBlock { margin-left: 1em; }
-->
    </style>
  </head>
  <body>
<div id="HeaderBlock"><img src="images/ICME2006-WebHeader.gif" alt="ICME 2006 Toronto"></div>
<div id="columnContainer">
<div id="MenuBlock"><div id="MenuBlock-content">
  <ul id="navigation">
    <li><a href="default.asp">Home</a></li>
    <li><a href="CallForPapers.asp">Call for Papers</a></li>
    <li><a href="ImportantDates.asp">Important Dates</a></li>
    <li><a href="Keynotes.asp">Keynote Talks</a></li>
    <li><a href="Papers.asp">Paper Submission</a></li>
    <li><a href="RegularProgram.asp">Technical Program</a></li>
    <li><a href="Registration.asp">Registration</a></li>
    <li><a href="MeetingSchedule.asp">Meeting Schedule</a></li>
    <li><a href="Housing.asp">Accommodation</a></li>
    <li><a href="SpecialSessions.asp">Special Sessions</a></li>
    <li><a href="Tutorials.asp">Tutorials</a></li>
    <li><a href="SocialEvents.asp">Social Events</a></li>
    <li><a href="Venue.asp">Venue</a></li>
    <li><a href="AboutToronto.asp">About Toronto</a></li>
    <li><a href="TechnicalCommittee.asp">Technical Program Committee</a></li>
    <li><a href="OrganizingCommittee.asp">Organizing Committee</a></li>
    <li><a href="SponsorSupport.asp">Sponsors</a></li>
  </ul>
</div></div>
<div id="ContentBlock"><div id="ContentBlock-content"><!-- End Header -->


<h1>T2.1: Capturing Light and Motion: Multimedia Techniques for Animation and Movie Production</h1>

<p><strong>Sunday, July 9, 2006 (13:30 - 16:30, Carmichael)</strong></p>

<h4>Instructors</h4>

<p><a href="http://www.it.cityu.edu.hk/~howard/">Prof. Howard Leung</a>, <em>City University of Hong Kong</em><br>
<a href="http://www.ece.cmu.edu/~tsuhan/">Prof. Tsuhan Chen</a>, <em>Carnegie Mellon University, USA</em><br></p>

<h4>Abstract</h4>

<p>With the growing demand from the audience for high-quality visual
experience, people continue to explore multimedia technologies that can be
adopted in the movie and animation industries.  In the spatial domain, audience
would like to be able to look at a realistic scene that may include synthetic
objects from various viewpoints.  This can be achieved by using the concept of
the plenoptic function as a seven-dimensional function that represents all the
light rays in a dynamic scene.  The research on sampling, storing,
interpolating, and reconstructing the plenoptic function, has been emerging at
both academic and industrial research institutions and is commonly referred to
as image-based rendering or multi-view image processing.  In the temporal
domain, audience would like to see a human-like character or an avatar move
realistically just like a human. The development of motion capture systems
facilitates this task by actually collecting the 3D information of human
motions.  The research on capturing the accurate 3D data with less manual
intervention and on processing of the motion capture data have been hot topics
in recent years.</p>

<p>Recent convergence of image processing, computer vision, and computer
graphics has resulted in significant progress in image-based rendering and
motion capture techniques.  Now widely used in applications ranging from
special effects (Remember the movie "The Matrix" and “The Polar Express”?) to
virtual reality, image-based rendering and motion capture have become critical
tools for creating visually exciting content.  Image-based rendering helps to
capture real-world scenes directly without the need for computationally
expensive modeling of 3D geometry or surface reflectance, as is often done in
traditional computer graphics. On the other hand, motion capture is employed
for collecting human motion data to enhance realism compared with
physically-based modeling and to reduce manual labeling as in rotoscoping.</p>

<p>Interesting problems in image-based rendering and motion capture will be
discussed in this tutorial. The section on the image-based rendering includes
capturing, sampling, representation and streaming of multi-view images needed
to render realistically looking scenes. For examples, lightfield, lumigraph,
and concentric mosaics are popular representations of multi-view data using
different sampling schemes.  While studying the mechanism for sampling
multi-view data, we will reveal the connections between image-based rendering
and multidimensional multirate signal processing, and the Sampling Theorem
discovered by Harry Nyquist 80 years ago! The section on motion capture will be
focused on optical motion capture systems that are divided into two main
categories: markerless and marker-based motion capture systems. The feature
extraction, data representation, processing of motion capture data for
classification and retrieval will be introduced. Applications of motion capture
systems for dancing performance, movie production, animation and robot motion
driving will be discussed.</p>

<h4>Course Outline</h4>

<ol style="list-style-type: upper-roman;">
  <li>Fundamentals
  <ul>
    <li>Demand for realistic rendering of scene and human motions </li>
    <li>Image-based rendering: a technique for creating realistic scene </li>
    <li>Motion capture: a technique for obtaining realistic human motions</li>
    <li>Camera models and capturing multi-view data</li>
  </ul></li>

  <li>Image-Based Rendering Schemes
  <ul>
    <li>Parameterization of the plenoptic function</li>
    <li>Lightfield and lumigraph</li>
    <li>Concentric mosaics</li>
    <li>Panorama and Quicktime VR</li>
  </ul></li>

  <li>Sampling for Multi-View Data
  <ul>
    <li>Spectral analysis</li>
    <li>Rectangular and non-rectangular uniform sampling</li>
    <li>Non-uniform sampling for active image-based rendering</li>
  </ul></li>

  <li>Application Issues for Image-Based Rendering
  <ul>
    <li>Compression for multi-view data</li>
    <li>Streaming of multi-view data over networks</li>
    <li>Composing real and synthetic scenes</li>
    <li>Special effects: “The Matrix” and “EyeVision”</li>
  </ul></li>

  <li>Introduction of Motion Capture
  <ul>
    <li>Brief history</li>
    <li>Applications in movie production and animation</li>
    <li>Different kinds of motion capture systems</li>
    <li>Markerless vs. marker-based motion capture systems</li>
  </ul></li>

  <li>Markerless Motion Capture Systems
  <ul>
    <li>Feature extraction from edge and color information</li>
    <li>Analysis-by-synthesis model fitting</li>
    <li>Single-camera system </li>
    <li>Multiple-camera system </li>
  </ul></li>

  <li>Marker-Based Motion Capture Systems
  <ul>
    <li>Marker configuration</li>
    <li>Calibration and tracking</li>
    <li>Data format and description</li>
    <li>Classification and retrieval</li>
    <li>Driving of robot motions and dance performance with motion capture data</li>
  </ul></li>
</ol>

<h4>Speaker Biographies</h4>

<p><strong>Howard Leung</strong> is currently an Assistant Professor in the
Department of Computer Science at City University of Hong Kong. He received the
B.Eng. degree in Electrical Engineering from McGill University, Canada, in
1998, the M.Sc. degree and the Ph.D. degree in Electrical and Computer
Engineering from Carnegie Mellon University in 1999 and 2003 respectively.
Throughout his graduate studies at CMU, he was with the Advanced Multimedia
Processing Lab and worked on various projects such as trademark and sketch
retrieval, 3D virtual environment for multi-user conferencing and image-based
rendering for 3D virtual environment. In addition, he spent several summers in
I.B.M. T. J. Watson Research Center for building an interactive seminar
broadcast system, developing an immersive whiteboard and creating a realistic
video avatar.</p>

<p>Currently Howard is working on several research projects along the area of
multimedia signal processing and pattern recognition. He has been developing a
web-based Chinese handwriting education system with an intelligent analysis
tool to provide instant feedback to students. Moreover, he is working on
re-synthesizing the dynamic writing from static Chinese calligraphy images by
applying image processing and novel model parameter estimation techniques. In
addition, he is experimenting with novel approaches for processing, indexing
and retrieving 3D human motions captured by Motion Capture system. Furthermore,
he has been collaborating with the industry on a project for developing a
multi-user whiteboard system for mobile devices.</p>

<p>Howard has also been actively involved in various professional activities.
He was the Local Arrangement Co-chair for ACM Symposium on Virtual Reality
Software and Technology (VRST 2004) and the Tutorial Chair for the 4th
International Conference on Web-Based Learning (ICWL 2005). He served as a
Technical Program Committee Member for IEEE International Symposium on
Intelligent Multimedia, Video &amp; Speech Processing (ISIMP 2004),
Asia-Pacific Workshop on Visual Information Processing (VIP 2005), Multimedia
Communications and Home Networking Symposium, IEEE International Conference on
Communications (ICC 2005) and the 11th International Conference on Parallel and
Distributed Systems (ICPADS 2005). He is the Organization Chair of the 5th
International Conference on Web-Based Learning (ICWL 2006) and the Finance
Chair of the Tenth IEEE International EDOC Conference (EDOC 2006). He is
currently a member of the IEEE Signal Processing Society and is the Tresurer of
the Hong Kong Web Society.</p>

<p><strong>Tsuhan Chen</strong> has been with the Department of Electrical and
Computer Engineering, Carnegie Mellon University, Pittsburgh, Pennsylvania,
since October 1997, where he is currently Professor.  He directs the Advanced
Multimedia Processing Laboratory, striving to turn multimedia technologies from
science fiction into reality.  His research interests include multimedia signal
processing and communication, implementation of multimedia systems, multimodal
biometrics, audio-visual interaction, pattern recognition, computer vision and
computer graphics, and bioinformatics.  From August 1993 to October 1997, he
worked in the Visual Communications Research Department, AT&amp;T Bell
Laboratories, Holmdel, New Jersey, and later at AT&amp;T Labs-Research, Red
Bank, New Jersey, as a senior technical staff member and then a principle
technical staff member.</p>

<p>Tsuhan helped create the Technical Committee on Multimedia Signal
Processing, as the founding chair, and the Multimedia Signal Processing
Workshop, both in the IEEE Signal Processing Society.  His endeavor later
evolved into founding of the IEEE Transactions on Multimedia and the IEEE
International Conference on Multimedia and Expo, both joining the efforts of
multiple IEEE societies.  He was appointed the Editor-in-Chief of IEEE
Transactions on Multimedia for 2002-2004.</p>

<p>Before serving as the Editor-in-Chief for IEEE Transactions on Multimedia,
he also served in the Editorial Board of IEEE Signal Processing Magazine and as
Associate Editor for IEEE Trans. on Circuits and Systems for Video Technology,
IEEE Trans. on Image Processing, IEEE Trans. on Signal Processing, and IEEE
Trans. on Multimedia.  He has co-edited a book titled Advances in Multimedia:
Systems, Standards, and Networks.</p>

<p>Tsuhan received the B.S. degree in electrical engineering from the National
Taiwan University in 1987, and the M.S. and Ph.D. degrees in electrical
engineering from the California Institute of Technology, Pasadena, California,
in 1990 and 1993, respectively.  He received the Charles Wilts Prize for
outstanding independent research in Electrical Engineering leading to a Ph.D.
degree at the California Institute of Technology.  He has published more than a
hundred of technical papers and holds fifteen U.S. patents.  He was a recipient
of the National Science Foundation CAREER Award, titled “Multimodal and
Multimedia Signal Processing,” from 2000 to 2003.</p>

<div style="height: 1em;"></div>
<!-- Begin Footer --></div></div>
<hr class="cleaner" />
<div id="FooterBlock">
  <p>&copy;2014 <a href="http://www.cmsworldwide.com/">Conference Management Services, Inc.</a> -||- email: <a href="mailto:webmaster@icme2006.org">webmaster@icme2006.org</a> -||- Last updated Friday, June 23, 2006</p>
</div>
  </body>
</html>
