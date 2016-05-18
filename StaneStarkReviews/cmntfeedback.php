<?php
session_start();// Starting Session
//if( isset($_SESSION["userName"]) )
{
	echo"Review say's";
$hostname="localhost";
$username="root";
$password="";
$dbhandle=mysql_connect($hostname,$username,$password);
$selectdb=mysql_select_db("rr",$dbhandle);
$uid=$_SESSION['id'];
$sqlQry		=	"SELECT * FROM comment where cid='$uid'";
$res_qry	=	mysql_query($sqlQry);
while($row = mysql_fetch_array( $res_qry )) {
	
	//print_r( $row);
	
	$user_id = $row['cid'];
	$user_name = $row['name'];
	$usermail = $row['mailid'];
	$usersite = $row['website'];
	$usercmnt= $row['cmnt'];
	echo$usercmnt;
	//$userans= $row['qtn'];
	$pcount=0;
	$ncount=0;
	$pcheck = array();
	$ncheck = array();
	$query = "SELECT pwords FROM p_words";
	$result = mysql_query($query) or die ("no query please check");
	while($row = mysql_fetch_assoc($result, MYSQL_ASSOC))
     {
		$pcheck[] = $row['pwords'];
		
     }
	$query1 = "SELECT nword FROM n_words";
	$result1 = mysql_query($query1) or die ("no query");
	while($row1 = mysql_fetch_assoc($result1,MYSQL_ASSOC))
     {
		$ncheck[] = $row1['nword'];
     }
	$cmntsplit=explode(" ",$usercmnt);
	//echo$cmntsplit[2];
	$size=count($cmntsplit);
	//echo$size;
	echo$pcheck[0];
	$psize=count($pcheck);
	
	$nsize=count($ncheck);
	$fback="";
	for($i=0;$i<$size;$i++)
	{
		for($j=0;$j<$psize;$j++)
		{
			if(strcasecmp($cmntsplit[$i],$pcheck[$j])== 0)
			{
				$pcount++;
			}
		}
	}
	for($k=0;$k<$size;$k++)
	{
		for($l=0;$l<$nsize;$l++)
		{
			if(strcasecmp($cmntsplit[$k],$ncheck[$l])== 0)
			{
				$ncount++;
				
			}
		}
	}
	echo "pcount:".$pcount.'<br />';
	echo"ncount:".$ncount;
	if($pcount>$ncount)
	{
		$fback="positive";
		$query1 = "update comment set fback='$fback' WHERE cid='$uid';";
	    $result1 = mysql_query($query1) or die ("no query");
	}
	else
	{
		$fback=="negative";
		$query1 = "update comment set fback='$fback' WHERE cid='$uid';";
		$result1 = mysql_query($query1) or die ("no query");
	}
	if($fback=="positive")
	{
		 echo "<form>";
         //echo "<form action='tag.php' method='post'>";
		 echo"<input type='text' size='60' name='reply' value='Thanks for your Positive Feedback'>".'<br />';
         //echo "<input type='submit' value='submit'>";
         echo "</form>";
	}
    else
	{
		echo "<form>";
		echo "<form action='tag.php' method='post'>";
		echo"<input type='text' size='60' name='reply' value='Your Negative Feedback will be reviewed soon...'>".'<br />';
		echo "<input type='submit' value='submit'>";
		echo "</form>";
	}
	?>
	
    <form action="tag.php" method="post">
    <input type="submit" name="submit" value="View Results">
    </form>
	<?php
	/*if(isset($_POST['submit'])) {
	    session_destroy();
        echo "Successfully  Logged Out";
     }*/
	}
}
/*else
{
   header('Location: index.html');
}*/	
?>