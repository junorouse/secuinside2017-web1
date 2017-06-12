<?php
require_once("config.php");
require_once("check_login.php");

include("header.php");
?>

<?php
    /*
        idx_token rathern than idx
    */
    $stmt = $pdo->prepare("select * from supports where user_id=? and idx_token=? limit 1");
    $stmt->execute(array($_COOKIE['user_id'], $_GET['idx_token']));
    $rows = $stmt->fetch(PDO::FETCH_ASSOC);


    $a = "Set-Cookie: last_view_title=".$rows['title']."; expires=Mon, 12-Oct-2017 01:06:44 GMT; Max-Age=3600;";

    $c = explode("\n", $a);

    foreach ($c as $x) {
        header($x);
        var_dump($x);
    }
?>

<section class="section">
  <div class="container">
    <h1 class="title">read</h1>
    <hr>
    <div class="columns">
        <div class="column is-10 is-offset-1">
            <div class="box">
                <div class="content">
                    <h1><?php echo $rows['title']; ?></h1>

                    <?php echo $rows['content']; ?>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>

<?php
include("footer.php");
?>
