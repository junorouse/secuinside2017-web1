<?php
require_once("config.php");
require_once("check_login.php");

include("header.php");
?>

<?php
    $stmt = $pdo->prepare("select * from supports where user_id=?");
    $stmt->execute(array($_COOKIE['user_id']));
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<section class="section">
  <div class="container">
    <h1 class="title">Mypage</h1>
    <hr>
    <div class="columns">
        <div class="column is-10 is-offset-1">
            <div class="box">
                Last view: <?php echo $_COOKIE['last_view_title']; ?><br />
                My Id: <?php echo $_COOKIE['user_id']; ?><br /><br />
                <table class="table">
                <thead>
                    <tr>
                    <th><abbr title="Position">Pos</abbr></th>
                    <th>Title</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($rows as $r) {
                    ?>
                    <tr>
                    <th><?php echo $r['idx']; ?></th>
                    <td><a href='read.php?idx_token=<?php echo $r['idx_token']; ?>'><?php echo $r['title']; ?></a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
                </table>
            </div>
        </div>
    </div>
  </div>
</section>

<?php
include("footer.php");
?>
