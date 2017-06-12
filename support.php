<?php
require_once("config.php");
require_once("check_login.php");

if (isset($_POST['title']) && isset($_POST['content'])) {
    $title = $_POST['title'];
    $content = $_POST['content'];

    // insert
    $stmt = $pdo->prepare("insert into supports (user_id, title, content, idx_token) values (?, ?, ?, ?)");
    $stmt->execute(array($_COOKIE['user_id'], $title, $content, sha1($title.time())));
    alert("Success !", "/mypage.php");
    exit(0);
}

include("header.php");
?>

<section class="section">
  <div class="container">
    <h1 class="title">Support</h1>
    <hr>
    <div class="columns">
        <div class="column is-6 is-offset-3">
            <div class="box">
                <form method='POST' action='support.php'>
                    <div class="field">
                        <label class="label">Title</label>
                        <p class="control">
                            <input class="input" type="text" placeholder="title" name="title">
                        </p>
                    </div> <!--title-->
                    <div class="field">
                        <label class="label">Message</label>
                        <p class="control">
                            <textarea class="textarea" placeholder="message" name="content"></textarea>
                        </p>
                    </div> <!--content-->
                    <hr>
                    <div class="field is-grouped is-right">
                        <p class="control">
                            <button class="button is-primary" type="submit">Send</button>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
  </div>
</section>

<?php
include("footer.php");
?>
