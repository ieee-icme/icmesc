<?php
include 'include.php';
echoStart();
?>
<h1>ICME 2015 Tutorials</h1>
<h3>(Tutorials will be free of charge to all registrants)</h3>
<br />
<br />

<h2><a name="tutho"></a>Visual Correspondences: Taxonomy, Modern Approaches and Ubiquitous Applications</h2>
<p><strong>Date/Time</strong>: June 29, 8:00am-11.15am</p>
<p><strong>Room</strong>: Cavour</p>
<p><strong>Lecturers:</strong> Dongbo Min, Chungnam (National University, Korea), Wen-Yan Lin, (Advanced Digital Sciences Center, Singapore), Jiangbo Lu, (Advanced Digital Sciences Center, Singapore), Minh N. Do (UIUC, US) </p> 
<p><strong>Abstract</strong></p>
<p align="justify">Finding visual correspondence across images is the cornerstone in numerous computer vision and multimedia applications. Correspondence maps serve as key building blocks for many high-level applications, including e.g., autonomous driving, image processing, computational photography, 3D scene reconstruction, place recognition and location based services, video odometry, video surveillances, and scene understanding.</p> 
<p align="justify">Visual correspondence methods aim to find a set of matched pixels between two or multiple images. In general, its performance relies primarily on two components: image descriptors (or matching similarity measures) and regularization or optimization techniques. Traditional approaches for estimating depth or optical flow fields have been dramatically advanced, as observed in several benchmarks. Recently, several efforts have also been made to establish correspondences across multiple images that are captured for different 3D scene yet having semantically similar appearances, and/or that are captured with large visual disparities, significant illumination changes, and images taken with different sensor sensitivities.</p>
<p align="justify">In this tutorial, we will cover various fundamental techniques that have been developed to design correspondence algorithms. We will first introduce state-of-the-arts local image descriptors, which measure a matching fidelity across multiple images. More comprehensive overview will be given by categorizing these approaches according to correspondence density, invariance against photometric and geometric variations, and robustness against different sensor sensitivities.</p> 
<p align="justify">We will then cover recent research works in solving for a regularized correspondence field or motion model through optimization. In particular, we focus on discrete labeling optimization techniques and discuss the related issues such as serious computational challenges and labeling accuracy. Cost volume filtering-based approaches and global optimization approaches will be introduced, which effectively deal with the huge discrete label space and/or the high-order Markov Random Field (CRF) model by making use of efficient filtering algorithms and a smart randomized search idea. In addition, we will introduce a recent line of works that propose a principled solution for modeling general motion from noisy, scattered feature matches by reformulating the piecewise smoothness as a robust, continuous global constraint. This can be solved by minimizing a global cost function. The global smoothness makes the proposed bilateral motion model computation highly robust, and it can be computed directly from noisy correspondence without RANSAC’s hypothesis and test framework. Once computed, models can robustly validate new matching hypotheses. This provides large numbers of correspondence points over wide baselines, while keeping outliers to a minimum (zero in many cases).</p>
<p align="justify">Finally, we will introduce numerous exciting applications relying on visual correspondence algorithms such as scene understanding, robot navigation, computational photography, and 3-D scene reconstruction. We will present the key ideas of these latest exciting applications, while highlighting the essential roles that visual correspondences are playing.</p>
<table width="95%" border="0">
  <tr>
    <td width="14%"><a href="http://infcom.gist.ac.kr/english/people/faculty.php?key=hoyo"><img src="images/tutorials/DongboMin.jpg" width="125" height="160" /></a></td>
    <td width="86%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
      <p align="justify"><strong><a href="http://infcom.gist.ac.kr/english/people/faculty.php?key=hoyo">Dongbo Min</a></strong> received the B.S., M.S. and Ph.D. degrees from the School of Electrical and Electronic Engineering at Yonsei University, in 2003, 2005 and 2009, respectively. From 2009 to 2010, he worked with Mitsubishi Electric Research Laboratories (MERL) as a post-doctoral researcher, where he developed a prototype of 3D video system (3DTV). From 2010 to 2015, he worked with Advanced Digital Sciences Center (ADSC) in Singapore, which was jointly founded by University of Illinois at Urbana-Champaign (UIUC) and the Agency for Science, Technology and Research (A*STAR), a Singapore government agency. Since 2015, he has been working with Chungnam National University (CNU), Daejeon, Korea, where he is currently as an assistant professor with the Department of Computer Science and Engineering. His research interests include computer vision, 2D/3D video processing, computational photography, augmented reality, and continuous/discrete optimization </p>
      </td>
  </tr>
<tr>
    <td width="14%"><a href="http://adsc.illinois.edu/people/daniel-lin"><img src="images/tutorials/Wen-YanLin.png" width="125" height="160" /></a></td>
    <td width="86%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
      <p align="justify"><strong><a href="http://adsc.illinois.edu/people/daniel-lin">Wen-Yan Lin</a></strong> received his PhD from National University of Singapore in 2011. He was a Research Scientist in the Institute for Infocomm Research, Singapore from 2010-2012 and a Post-doc for Professor Philip Torr in Oxford Brookes in 2013. He is currently a researcher in the Advanced Digital Sciences Center, a joint research center between Illinois and Singapore. His research interests are structure from motion and correspondence. </p>
      </td>
  </tr>
<tr>
    <td width="14%"><a href="http://adsc.illinois.edu/people/jiangbo-lu"><img src="images/tutorials/JiangboLu.jpg" width="125" height="160" /></a></td>
    <td width="86%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
      <p align="justify"><strong><a href="http://adsc.illinois.edu/people/jiangbo-lu">Jiangbo Lu</a></strong> is a Senior Research Scientist with the Advanced Digital Sciences Center (ADSC), a Singapore-based research center of University of Illinois at Urbana-Champaign. He also holds a joint appointment with the Coordinated Science Laboratory (CSL) of the University of Illinois. At ADSC, he is leading and working on a few use-inspired research projects that involve basic research, applied research, as well as commercialization of technology. He served and is serving as the PI and Co-PI for several research or technology commercialization projects. Some of his research work jointly with his colleagues and project students has led to a few Best Paper Awards (or nominations), as well as ICT awards, such as the AIT Best Paper Award in the IEEE ICCV 2009 Workshop on Embedded Computer Vision together with K. Zhang. Three of his technologies developed at ADSC have been licensed to a few Singaporean companies. In 2012, the live video cutout project demoed on-stage at the inaugural DEMO Asia 2012 conference won him and his team a prestigious DEMOguru award. Two of his recent projects (“Magic Touch” and “Social AR”) have been covered by the largest newspapers based in Singapore. Before joining ADSC in September 2009, he had experience working with IMEC (Leuven), Microsoft Research Asia (Beijing), and VIA-S3 Graphics (Shanghai). He received the B.S. (with honors) and M.S. degrees in electrical engineering from Zhejiang University, China, in 2000 and 2003, respectively, and the Ph.D. degree in electrical engineering, Katholieke Universiteit Leuven, Belgium, in 2009. He is an Associate Editor for IEEE Transactions on Circuits and Systems for Video Technology (T-CSVT). He received the 2012 TCSVT Best Associate Editor Award. His research interests include computer vision, visual computing, image processing, video communication, interactive multimedia applications and systems, and efficient algorithms for various architectures. </p>
      </td>
  </tr>

<tr>
    <td width="14%"><a href="http://minhdo.ece.illinois.edu/"><img src="images/tutorials/MinhNDo.jpg" width="125" height="160" /></a></td>
    <td width="86%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
      <p align="justify"><strong><a href="http://minhdo.ece.illinois.edu/">Minh N. Do</a></strong> (M'01, SM'07, F'14) was born in Vietnam in 1974.  He received the B.Eng. degree in computer engineering from the University of Canberra, Australia, in 1997, and the Dr.Sci. degree in communication systems from the Swiss Federal Institute of Technology Lausanne (EPFL), Switzerland, in 2001. Since 2002, he has been on the faculty at the University of Illinois at Urbana-Champaign (UIUC), where he is currently a Professor in the Department of Electrical and Computer Engineering, and hold joint appointments with the Coordinated Science Laboratory, the Beckman Institute for Advanced Science and Technology, and the Department of Bioengineering.  His research interests include image and multi-dimensional signal processing, wavelets and multiscale geometric analysis, computational imaging, augmented reality, and visual information representation. He received a Silver Medal from the 32nd International Mathematical Olympiad in 1991, a University Medal from the University of Canberra in 1997, a Doctorate Award from the EPFL in 2001, a CAREER Award from the National Science Foundation in 2003, and a Young Author Best Paper Award from IEEE in 2008.  He was named a Beckman Fellow at the Center for Advanced Study, UIUC, in 2006, and received of a Xerox Award for Faculty Research from the College of Engineering, UIUC, in 2007.  He was a member of the IEEE Signal Processing Theory and Methods Technical Committee, Image, Video, and Multidimensional Signal Processing Technical Committee, and an Associate Editor of the IEEE Transactions on Image Processing.  He is a Fellow of the IEEE for contributions to image representation and computational imaging.  He is a co-founder and Chief Scientist of Personify Inc., a spin-off from UIUC to commercialize depth-based visual communication. </p>
      </td>
  </tr>
</table>

<br />
<br />
<br />
<h2><a name="tutzz"></a>HEVC/H.265 Video Coding Standard (Version 2) including the Range Extensions, Scalable Extensions, and Multiview Extensions</h2>
<p><strong>Date/Time</strong>: June 29, 11.30am-3:00pm</p>
<p><strong>Room</strong>: Cavour</p>
<p><strong>Lecturers: </strong>Dan Grois, Benjamin Bross, and Detlev Marpe (Fraunhofer Institute for Telecommunications – Heinrich Hertz Institute (HHI), Berlin, Germany)  </p>
<p><strong>Abstract</strong></p>
<p align="justify">The High-Efficiency Video Coding (HEVC) standard is the latest standard developed by a Joint Collaborative Team on Video Coding (JCT-VC), the first version of which was established by both ITU-T Video Coding Experts Group (VCEG) and the ISO/IEC Moving Pictures Expert Group (MPEG) in January, 2013. When compared to its predecessor, i.e. the H.264/MPEG-AVC standard, H.265/MPEG-HEVC allowed achieving dramatic bit-rate savings due to employing state-of-the-art technological achievements. H.265/MPEG-HEVC was also especially designed for the High Definition (HD) as well as to the Ultra-High Definition (UHD) video content, which often refers to both 3840x2160 (4K) or 7680x4320 (8K) resolutions in terms of luma samples, the demand for which is expected to dramatically increase in the near future.  This tutorial will be focused on the second version of the HEVC video coding standard, which was officially issued in October 2014, further including the combined extensions: RExt – the range extensions, SHVC – the scalable extension, and MV-HEVC – the multiview extension. First, the speakers will provide a brief overview of the H.264/MPEG-AVC standard, followed by a detailed overview of the HEVC coding tools, which led to such significant improvements in coding efficiency compared to H.264/MPEG-AVC (including the quadtree coding structure, intra/inter-prediction, in-loop filtering, high-level syntax, transform coding, entropy coding, parallel coding tools, etc.), further making a special emphasis on the compression efficiency and performance. Second, the speakers will give a detailed overview on the HEVC extensions: particularly, the range extensions (including extended bit depth, chroma format support, etc.), the scalable extension (including the up-sampling process, inter-layer prediction process, etc.), and the multiview extension (including the inter-view prediction, etc.). Finally, this talk will be concluded by a discussion regarding further research directions and challenges.
.</p>
<table width="95%" border="0">
  <tr>
    <td width="14%"><a href="http://www.hhi.fraunhofer.de/fields-of-competence/image-processing/research-groups/image-video-coding.html"><img src="images/tutorials/grois.png" width="125" height="160" /></a></td>
    <td width="86%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
      <p align="justify"><strong><a href="http://www.hhi.fraunhofer.de/fields-of-competence/image-processing/research-groups/image-video-coding.html">Dan Grois</a></strong> Dan Grois received Ph.D. degree at the Communication Systems Engineering Department, Ben-Gurion University of the Negev (BGU), Israel, 2011. From 2011 to 2013, Dan was a Senior Researcher at the Communication Systems Engineering Department, BGU. Starting from the middle of 2013, Dan is a Post-Doctoral Senior Researcher at the Image Processing & Analytics Department of the Fraunhofer Institute for Telecommunications - Heinrich Hertz Institute (HHI), Germany. Dan is an author and co-author of about 40 publications in the area of image/video coding and data processing, which have been presented at top-tier international conferences, and published in various scientific journals, books, etc. In addition, Dan is a referee of top-tier conferences and international journals, such as the IEEE Trans. in Image Processing, IEEE Trans. on Multimedia, IEEE Trans. on Signal Processing, Journal of Visual Comm. and Image Repres., Elsevier, IEEE Sensors, SPIE Optical Engineering, etc. In 2013, Dan also served as a Guest Editor of the SPIE Optical Engineering journal. 
    During his academic carrier, Dan was granted various fellowships, including Kreitman Fellowships and the ERCIM Alain Bensoussan Fellowship, which was provided by the FP7 Marie Curie Actions COFUND Programme. In addition, Dan currently is a Fellow of the PROVISION ITN project, which is a part of the European Union’s Marie Skłodowska-Curie Actions of the European Commission.  
    Dan is a Senior Member of the IEEE, and a Member of the ACM and SMPTE societies. Dan's research interests include image and video coding and processing, video coding standards, particularly H.265 | MPEG-H High-Efficiency Video Coding (HEVC), region-of-interest scalability, computational complexity and bit-rate control, network communication and protocols, and future multimedia applications/systems.</p>
    </td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td><a href="http://www.hhi.fraunhofer.de/fields-of-competence/image-processing/research-groups/image-video-coding.html"><img src="images/tutorials/bross.png" width="125" height="160" /></a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
      <p align="justify"><strong><a href="http://www.hhi.fraunhofer.de/fields-of-competence/image-processing/research-groups/image-video-coding.html">Benjamin Bross </a></strong> is a Project Manager at the Image Processing & Analytics Department of the Fraunhofer Institute for Telecommunications - Heinrich Hertz Institute, Berlin and a part-time lecturer at the HTW University of Applied Sciences Berlin. He received the Dipl.-Ing. degree in electrical engineering from RWTH University Aachen, Germany in 2008. During his studies he was working on three-dimensional image registration in medical imaging and on decoder side motion vector derivation in H.264/MPEG-4 Advanced Video Coding (AVC). 
    Since the development of the new H.265 | MPEG-H High-Efficiency Video Coding (HEVC) Standard, which started in 2010, Benjamin was very actively involved in the standardization process as a technical contributor and coordinator of core experiments. In July 2012, Benjamin was appointed as a co-chair of the editing Ad Hoc Group and became the chief editor of the HEVC video coding standard. At the Heinrich Hertz Institute, he is currently responsible for the development of HEVC conforming real-time encoders and decoders. 
    Besides giving talks about the emerging HEVC video coding standard, Benjamin Bross is an author or co-author of several fundamental HEVC-related publications, and an author of two book chapters on HEVC and Inter-Picture Prediction Techniques in HEVC. He received the IEEE Best Paper Award at the 2013 IEEE International Conference on Consumer Electronics – Berlin in 2013 and the SMPTE Journal Certificate of Merit in 2014.
</p></td>
  </tr>
<tr>
    <td><a href="http://www.hhi.fraunhofer.de/fields-of-competence/image-processing/research-groups/image-video-coding.html"><img src="images/tutorials/marpe.png" width="125" height="160" /></a></td>
    <td>&nbsp;</td>
  </tr>
<tr>
    <td colspan="2">
      <p align="justify"><strong><a href="http://www.hhi.fraunhofer.de/fields-of-competence/image-processing/research-groups/image-video-coding.html">Detlev Marpe  </a></strong> is Head of the Image Processing & Analytics Department and Head of the Image & Video Coding Group of the Fraunhofer Institute for Telecommunications - Heinrich Hertz Institute, Berlin. He is also active as a part-time lecturer at Technical University Berlin. He received the Dipl.-Math. degree (Highest Hons.) from the Technical University of Berlin (TUB), Berlin, Germany and the Dr.-Ing. degree from the University of Rostock, Germany.
   Since more than a decade, he has successfully contributed to the standardization activities of ITU-T VCEG, ISO/IEC JPEG, and ISO/IEC MPEG for still image and video coding. During the development of the H.264 | MPEG-4 Advanced Video Coding (AVC) standard, he was chief architect of the CABAC entropy coding scheme as well as one of the main technical and editorial contributors to the so-called Fidelity Range Extensions (FRExt) with the addition of the High Profile in H.264 | MPEG-4 AVC. He was also one of the key people in designing the basic architecture of Scalable Video Coding (SVC) and Multiview Video Coding (MVC) as algorithmic and syntactical extensions of H.264 | MPEG-4 AVC. During the recent development of the H.265 | MPEG-H High-Efficiency Video Coding (HEVC) standard, he made significant contributions to the design of its fundamental building blocks. In addition, he also made successful proposals to the recent standardization of its Range Extensions and 3D Extensions.
    For his substantial contributions to the field of video coding, he received numerous awards, including a Nomination for the 2012 German Future Prize, the Karl Heinz Beckurts Award 2011, two Emmy Engineering Awards in 2008 and 2009, the 2009 Best Paper Award of the IEEE Circuits and Systems Society, the Joseph von Fraunhofer Prize 2004, and the Best Paper Award of the German Information Technology Society in 2004. As a co-founder of the Berlin-based daviko GmbH, he was winner of the Prime Prize of the 2001 Multimedia Start-Up Competition of the Geman Federal Ministry of Economics and Technology. 
    Detlev Marpe is author or co-author of more than 200 publications in the area of video coding and signal processing, and he holds numerous internationally issued patents and patent applications in this field. He is an IEEE Fellow and Member of the ITG (German Information Technology Society). He also serves as an Associate Editor of the IEEE Transactions on Circuits and Systems for Video Technology. His current research interests include image and video coding, signal processing for communications as well as computer vision and information theory.
</p></td>
  </tr>
</table>

<br />
<br />
<br />
<h2><a name="tutfe"></a>Over-the-Top Content Delivery: State of the Art and Challenges Ahead</h2>
<p><strong>Date/Time</strong>: June 29, 3:00pm-6:15pm</p>
<p><strong>Room</strong>: Sella</p>
<p><strong>Lecturers:</strong> Christian Timmerer (Alpen-Adria-Universität Klagenfurt, Austria), Ali C. Begen (CISCO)  </p>
<p><strong>Slide set</strong>:  <span class="indented highlighted"><a href="slides/over-the-top-content-delivery.pdf">PDF (46Mb)</a></span></p>
<p><strong>Abstract</strong></p>
<p align="justify">Over-the-top content delivery is becoming increasingly attractive for both live and on-demand content thanks to the popularity of platforms like YouTube, Vimeo, Netflix, Hulu, Maxdome, etc. In this tutorial, we present state of the art and challenges ahead in over-the-top content delivery. In particular, the goal of this tutorial is to provide an overview of adaptive media delivery, specifically in the context of HTTP adaptive streaming (HAS) including the recently ratified MPEG-DASH standard. The main focus of the tutorial will be on the common problems in HAS deployments such as client design, QoE optimization, multi-screen and hybrid delivery scenarios, and synchronization issues. For each problem, we will examine proposed solutions along with their pros and cons. In the last part of the tutorial, we will look into the open issues and review the work-in-progress and future research directions.</p>

<table width="95%" border="0">
  <tr>
    <td><a href="http://multimediacommunication.blogspot.co.at"><img src="images/tutorials/timmerer.jpg" width="115" height="160" /></a></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">

      <p align="justify"><strong><a href="http://multimediacommunication.blogspot.co.at"> Christian Timmerer </a></strong>  received his M.Sc. (Dipl.-Ing.) in January 2003 and his Ph.D. (Dr.techn.) in June 2006 (for research on the adaptation of scalable multimedia content in streaming and constraint environments) both from the Alpen-Adria-Universität Klagenfurt. He is currently an Associate Professor at the Institute of Information Technology (ITEC) within the Multimedia Communication Group. His research interests include immersive multimedia communication, streaming, adaptation, Quality of Experience, and Sensory Experience. 

He has published more than 150 papers in these areas and he has organized a number of special sessions and issues in this domain, e.g., “Special Session on MMT/DASH” (MMsys 2011, followed by a special issue in Signal Processing: Image Communication, 2012), “Special Issue on Adaptive Media Streaming” (IEEE JSAC, published 2014). Furthermore, he was the general chair of WIAMIS 2008, QoMEX 2013, and QCMan 2014; will be general chair of ACM Multimedia Systems 2016. He is an editorial board member of IEEE Computer, associate editor for IEEE Transactions on Multimedia, area editor for the Elsevier journal on Signal Processing: Image Communication and a key member of the Interest Groups (IG) on Image and Video Coding as well as Quality of Experience and Director of the Review Board of the IEEE Multimedia Communication Technical Committee. Finally, he writes a regular column for ACM SIGMM Records where he serves as an editor and he is a member of the ACM SIGMM Open Source Software Committee. Dr. Timmerer participated in the work of ISO/MPEG for more then 10 years, notably as the head of the Austrian delegation, coordinator of several core experiments, co-chair of several ad- hoc groups, and as an editor for various standards, notably the MPEG-21 Multimedia Framework and the MPEG Extensible Middleware (MXM which became MPEG-M). His current contributions are in the area of MPEG-V (Media Context and Control) and Dynamic Adaptive Streaming over HTTP (DASH), for which he also serves as an editor. He received various ISO/IEC certificates of appreciation. </p>
    </td>
  </tr>
<tr>
    <td><a href="http://ali.begen.net"><img src="images/tutorials/ali.png" width="125" height="160" /></a></td>
    <td>&nbsp;</td>
  </tr>
<tr>
    <td colspan="2">
      <p align="justify"><strong><a href="http://ali.begen.net">Ali C. Begen  </a></strong>  is with the Video and Content Platforms Research and Advanced Development Group at Cisco. His interests include networked entertainment, Internet multimedia, transport protocols and content delivery. Ali is currently working on architectures and protocols for next-generation video transport and distribution over IP networks, and he is an active contributor in the IETF and MPEG in these areas. Ali holds a Ph.D. degree in electrical and computer engineering from Georgia Tech. He received the Best Student-paper Award at IEEE ICIP 2003, the Most-cited Paper Award from Elsevier Signal Processing: Image Communication in 2008, and the Best-paper Award at Packet Video Workshop 2012. Ali has been an editor for the Consumer Communications and Networking series in the IEEE Communications Magazine since 2011 and an associate editor for the IEEE Transactions on Multimedia since 2013. He is a senior member of the IEEE and a senior member of the ACM. Further information on Ali’s projects, publications and presentations can be found at http://ali.begen.net.
</p></td>
  </tr>
</table>

<br />
<br />
<br />
<h2><a name="tutmm"></a>Social Multimedia Computing: A User-centric Perspective</h2>
<p><strong>Date/Time</strong>: June 29, 8:00am-11.15am</p>
<p><strong>Room</strong>: Giolitti</p>
<p><strong>Lecturers:</strong> Jitao Sang, (Chinese Academy of Sciences)  </p>
<p><strong>Slide set</strong>:  <span class="indented highlighted"><a href="slides/smc.pdf">PDF (46Mb)</a></span></p>
<p><strong>Abstract</strong></p>
<p align="justify">Social multimedia is umbrella term for the multimedia data generated and consumed under the social media circumstances. It has three fundamental elements as user, multimedia content and social interaction. The goal of social multimedia computing is to connect user with multimedia content by analyzing the social interaction. Compared with traditional and web multimedia computing, social multimedia computing distinguishes itself with two characteristics: (1) From Users. User is the basic data collection unit. User has revolutionized their roles from information receivers to information contributors. The crowd wisdom in User-Generated Content (UGC) has provided opportunities to bridge the notorious semantic gap for multimedia understanding. (2) For Users. User is the ultimate information service target. Information service in social media is essentially user-oriented. Inferring user interests, understanding and satisfying their personalized needs are the major tasks for most social multimedia services.
This tutorial intends to provide a taxonomy of the typical problems and overview state-of-the-art works in social multimedia computing from a user-centric perspective. This tutorial is divided into five parts, by first introducing the framework of Social Multimedia Computing from the user perspective (part I), and then elaborating the two major tasks of social multimedia computing as From Users: User-perceptive Multimedia Content Analysis (part II) and For Users: User Modeling & Customized Multimedia Services (part III). In part IV, a novel scheme on social multimedia computing in the big data era, User-centric Cross-network Multimedia Computing is presented. At last, this tutorial will be concluded with discussions on practical challenges, promising topics and prospects (part V).</p>
<table width="95%" border="0">
  <tr>
    <td width="14%"><a href="http://www.nlpr.ia.ac.cn/mmc/homepage/jtsang.html"><img src="images/tutorials/sang.png" width="125" height="160" /></a></td>
    <td width="86%">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2">
      <p align="justify"><strong><a href="http://www.nlpr.ia.ac.cn/mmc/homepage/jtsang.html">Jitao Sang</a></strong> is an assistant professor in National Laboratory of Pattern Recognition (NLPR) at Institute of Automation, Chinese Academy of Sciences (IA,CAS). He graduated his PhD in 2012 with the highest honor for CAS PhD students, the special prize of CAS president scholarship. His research interest is in social multimedia computing, and the recent works on user-centric social multimedia computing has attracted increasing attentions, with award-winning publications in the prestigious conferences including best paper finalist in MM2012 and MM2013, best student paper in MMM2013. So far, he has authored one Springer book, filed three patents, co-authored more than 40 journal and conference papers. He is program co-chair in PCM 2015, ICIMCS 2015, publicity chair in MMM 2015, publication chair in ICIMCS 2013, 2014, special session organizer in ICME2015, MMM2013, ICIMCS 2013, and program committee member in many conferences (MM2013, MM2014, CIKM2014, etc.). He is guest editor in journals such as MMSJ and MTA, keynote speaker at Social Media 2013, and tutorial speaker at MM 2014 and MMM 2015.</p>
    </td>
  </tr>
  
</table>


<?php
echoEnd();
?>
