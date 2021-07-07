<?php
session_start();
?>
<?php
include('connection_login.php');
$username = $_POST['username'];
$password = $_POST['password'];
if (isset($_POST['submit']) && !empty($_POST['username'])
&& !empty($_POST['password']))
{
$_SESSION['valid'] = true;
$_SESSION['timeout'] = time();

//to prevent from mysqli injection
$username = stripcslashes($username);
$password = md5(stripcslashes($password));
$username = mysqli_real_escape_string($con, $username);
$password = mysqli_real_escape_string($con, $password);

$sql = "select * from register where email = '$username' and password = '$password'";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_array($result, MYSQLI_ASSOC);
$count = mysqli_num_rows($result);

if($count == 1){

echo '<script type="text/javascript">
alert("login successful");
window.location = "index.php"
</script>';
}
else{

echo '<script type="text/javascript">
alert("Invalid login or Password");
window.location = "login.php"
</script>';
}
}
?>