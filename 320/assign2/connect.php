<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Database Connect - Step 4</title>
</head>

<body>

<?php 
	$db_server = mysql_connect('localhost', 'j3nnings', 'Ru7gers');
	if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
	mysql_select_db($db_database, 'whereru')
		or die("Unable to select database: " . mysql_error());
	$db_table = 'whereru_gigapan';  // description in Sakai Resources
	$query = "SELECT * FROM $db_table";
	$result = mysql_query($query);
	if (!$result) die ("Database access failed: " . mysql_error());
	$rows = mysql_num_rows($result);
	$id = 0; // assign index needed to access field in $row array … see data info in Sakai
	$title = 2;
	$campus = 3;
	for ($j = 0 ; $j < $rows ; ++$j) { 
		$row = mysql_fetch_row($result);  // returns array
		echo 'ID: ' . $row[$id] . '<br />';    
		echo 'Title: ' . $row[$title] . '<br />';
		echo 'Campus: ' . $row[$campus] . '<br />' . '<br />';
	}
?>
																		
</body>
</html>