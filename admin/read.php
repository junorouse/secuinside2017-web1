<?php
require_once("config.php");

?>
<pre>
sql injection protect: <?php
if (check_servername() && check_ip()) {
    echo 'off';
} else {
    echo 'on';
}
?>
</pre>


<?php
    /*
        idx_token rathern than idx
    */
    if ((check_servername() && check_ip()) || 0 ) {
        $query = "select * from supports where idx_token='{$_GET['idx_token']}'";
//        echo $query;
        $m = mysqli_query($mysqli, $query);
        $rows = mysqli_fetch_array($m);
    } else {
        $stmt = $pdo->prepare("select * from supports where idx_token=? limit 1");
        $stmt->execute(array($_GET['idx_token']));
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);
    }

    $a = "Set-Cookie: last_view_title=".$rows['title']."; expires=Mon, 12-Oct-2017 01:06:44 GMT; Max-Age=3600;";
    // $a .= "\nAccess-Control-Allow-Origin: *";

    $c = explode("\n", $a);

    foreach ($c as $x) {
        header($x);
        //var_dump($x);
    }
?>

<h1><?php echo $rows['title']; ?></h1>
<h2><?php echo $rows['content']; ?></h2>
