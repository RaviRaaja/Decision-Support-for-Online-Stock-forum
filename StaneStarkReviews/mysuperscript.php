
<?php 
define('DB_HOST', 'localhost');
 define('DB_NAME', 'rr');
 define('DB_USER','root');
 define('DB_PASSWORD','admin');
 $con=mysql_connect(DB_HOST,DB_USER,DB_PASSWORD) or die("Failed to connect to MySQL: " . mysql_error()); 
 $db=mysql_select_db(DB_NAME,$con) or die("Failed to connect to MySQL: " . mysql_error());
 /*$ID = $_POST['username']; 
 $Password = $_POST['password'];  */
 function SignIn() 
 { 
 session_start(); //starting the session for user profile page
 if(!empty($_POST['username'])) //checking the 'user' name which is from Sign-In.html, is it empty or have some text 
 { 
 $query = mysql_query("SELECT * FROM UserName where userName = '$_POST[username]' AND pass = '$_POST[password]'") or die(mysql_error());
 $row = mysql_fetch_array($query) or die(mysql_error()); 
 if(!empty($row['userName']) AND !empty($row['pass'])) 
 { 
 $_SESSION['userName'] = $row['pass']; 
 header('Location: mypage.php');
 //echo "SUCCESSFULLY LOGIN TO USER PROFILE PAGE..."; 
 }
 else 
 { 
 echo "SORRY... YOU ENTERD WRONG ID AND PASSWORD... PLEASE RETRY...";
 }
 } 
 } 
 if(isset($_POST['submit'])) 
 {
 SignIn(); 
 } 
 ?>






<!--?php
$servername = "192.168.1.126";
$username = "root";
$password = "admin";
$dbname = "rr";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
$user=_POST['username'];
$pass=_POST['password'];
$sql = "SELECT count(*) FROM MyGuests where uname='$user'&& passwd='$pass'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
        $url="mypage.php";
     // output data of each row
   /*  while($row = $result->fetch_assoc()) {
         echo "<br> id: ". $row["id"]. " - Name: ". $row["firstname"]. " " . $row["lastname"] . "<br>";*/
		echo "Login Successful" ;
		session_start();
		$_SESSION['login_user']= $user;
		header("Location: $url");
		//header('Location: mypage.php');
     }
} else {
     echo "Unsuccessful!!! Try Again";
}

$conn->close();
?-->
