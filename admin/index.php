<?php
require_once("config.php");
?>
<h1>Admin Page</h1>

<!--
<h4>your ip: <?php echo $_SERVER['REMOTE_ADDR']; ?></h4>
<h4>allowed ip: <?php echo '127.0.0.1, ::1'; ?></h4>
<h4>your host: <?php echo $_SERVER['SERVER_NAME']; ?></h4> 
<h4>allowed host: <?php echo 'localhost' ?></h4> 
-->

<pre>
# SQL Injection Protection Settings
not_protected_host = "localhost"
protected_host = "*"
</pre>

<?php
/*
$user_idx = $_COOKIE['user_idx'];
$user_idx = substr($user_idx, 0, 6);
$query = "select user_id from users where idx={$_COOKIE['user_idx']};";
$m = mysqli_query($mysqli, $query);
$x = mysqli_fetch_row($m);

if ($x) {
?>
<h3>your id: <?php echo $x[0]; ?></h3>
<?php
}
*/
?>