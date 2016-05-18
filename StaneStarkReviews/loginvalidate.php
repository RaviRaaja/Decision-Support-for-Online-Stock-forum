<?php 
define('DB_HOST', 'localhost');
 define('DB_NAME', 'rr');
 define('DB_USER','root');
 define('DB_PASSWORD','');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 $ID = $_GET['username']; 
 //echo $ID;
 /*$Password = $_POST['password'];  */
 function SignIn() 
 { 
 session_start(); //starting the session for user profile page
 if(!empty($_GET['username'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
 { 
 $query = mysql_query("SELECT * FROM login where uname = '$_GET[username]' AND pass = '$_GET[password]'") or die(mysql_error());
 $row = mysql_fetch_array($query) or die(mysql_error()); 
 if(!empty($row['uname']) AND !empty($row['pass'])) 
 { 
 $_SESSION['userName'] = $row['uname']; 
 header('Location: mypage.html');
 //echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
 }
 else 
 { 
 echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
 }
 } 
 } 
 if(isset($ID)) 
 {
 SignIn(); 
 } 
 ?>



<!--?php
$servername = "localhost";
$username = "root";
$password = "admin";
$dbname = "rr";

$dbhandle=mysql_connect($hostname,$username,$password);
$selectdb=mysql_select_db("Innovace-EMP-INFO",$dbhandle);
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
$user="";
$pass="";
$sql = "SELECT count(*) FROM MyGuests where uname='$user'&& passwd='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
     // output data of each row
   /*  while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";*/
		echo "Login Successful" ;
     }
} else {
     echo "Unsuccessful!!! Try Again";
}

$conn->close();
?-->  
