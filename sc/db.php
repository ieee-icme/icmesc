<? 
exit;

function db_connect()
    {//connect to database
			$host='localhost';
			$user='ieeeicme';
			$passwd='nadirobaA1?';
			$db='maillist';

        $link = mysql_connect ($host,$user,$passwd)
            or die("<p>The script could not connect to the database.</p>\n");
        mysql_select_db($db)
            or die("<p>The script could not open the database schema.</p>\n");

        return $link;
    }//db_connect()

    function db_close()
    {//close connection
        mysql_close();
    }//db_close()

	function show_emails()
{
	$query = "SELECT email FROM listserv";
	$result = mysql_query($query) or die (mysql_error());

	$i=0;
	while ($row = mysql_fetch_row($result))
	{
		echo "$row[0],<br>";
		$i++;
	} echo "<hr>".$i;
}

//	db_connect();
//	show_emails();
//	db_close();

?>