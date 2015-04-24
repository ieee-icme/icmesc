<?

	function nav_menu()
	{
		return "
			<a class=\"activenavitab\" href=\"home.php\">Home</a><span class=\"hide\"> | </span>
			<a class=\"navitab\" href=\"topics.php\">TOPICS</a><span class=\"hide\"> | </span>
			<a class=\"navitab\" href=\"author_info.php\">Author Information</a><span class=\"hide\"> | </span>
			<a class=\"navitab\" href=\"steering_committee.php\">Steering Committee</a><span class=\"hide\"> | </span>
			<a class=\"navitab\" href=\"history.php\">History</a><span class=\"hide\"> | </span>
			<a class=\"navitab\" href=\"ICME_CFP_2019.pdf\">Call For Proposal</a><span class=\"hide\"> | </span>
		";
	}

	function sidebar_menu()
	{
		return "
			<p>
			<a class=\"sidelink\" href=\"board/index.php\"><b>Message Borad</b></a><span class=\"hide\"> | </span>
			<a class=\"sidelink\" href=\"home.php\">Home</a><span class=\"hide\"> | </span>
			<a class=\"sidelink\" href=\"news.php\">News</a><span class=\"hide\"> | </span>
			<a class=\"sidelink\" href=\"ICME_SC_Charter.pdf\">Charter </a><span class=\"hide\"> | </span>
			<a class=\"sidelink\" href=\"ICME_guidelines.pdf\">Guidelines </a><span class=\"hide\"> | </span>
			<a class=\"sidelink\" href=\"minutes.php\">Minutes </a><span class=\"hide\"> | </span>
			<a class=\"sidelink\" href=\"topics.php\">Topics</a><span class=\"hide\"> | </span>
			<a class=\"sidelink\" href=\"author_info.php\">Author Information</a><span class=\"hide\"> | </span>
			<a class=\"sidelink\" href=\"steering_committee.php\">Steering Committee</a><span class=\"hide\"> | </span>
			<a class=\"sidelink\" href=\"history.php\">Upcoming conference</a><span class=\"hide\"> | </span>
			<a class=\"sidelink\" href=\"history.php\">Previous conferences</a><span class=\"hide\"> | </span>
			<a class=\"sidelink\" href=\"award.php\">Prize Paper Award</a><span class=\"hide\"> | </span>
			</p>
		";
	}
	
	function quote()
	{
		return "<h3>Quotes</h3> \n <p><i>\"Computer Science is no more about computers than astronomy is about telescopes\"</i>&nbsp E. W. Dijkstra<br /></p>";
	}
	
	function image()
	{
		return "<h3>ICME</h3>
				<p><img class=\"photo\" src=\"images/test.jpg\" height=\"100\" width=\"130\" /></p>
				";
	}
	
	function desc()
	{
		return "
			<h2>Welcome to IEEE-ICME.org!</h2>
			<p>
With around 1000 submissions and 500 participants each year, the IEEE International Conference on Multimedia & Expo (ICME) has been the flagship multimedia conference sponsored by four IEEE societies since 2000.

			<p class=\"right\"><a href=\"home.php\">more...</a></p>
		</p>
		";
	}

	function footer()
	{
		echo "All rights Reserved &copy; 2010 (IEEE-ICME.org). Design by <a href=\"mailto:agl7dd@mizzou.edu?subject=IEEE-ICME\">Alex</a>.";
	}
	
?>
