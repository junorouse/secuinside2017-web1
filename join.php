<?php
require_once("config.php");

if (isset($_POST['user_id']) && isset($_POST['user_pw1']) && isset($_POST['user_pw2'])) {
    if ($_POST['user_pw1'] === $_POST['user_pw2']) {
        $user_id = $_POST['user_id'];
        $user_pw = $_POST['user_pw1'];

        // insert
        $stmt = $pdo->prepare("insert into users (user_id, user_pw) values (?, ?)");
        $stmt->execute(array($user_id, $user_pw));

        alert("Success !", "/login.php");
        exit(0);
    } else {
        alert("Password check fail", "/join.php");
        exit(0);
    }
}

include("header.php");
?>

<section class="section">
  <div class="container">
    <h1 class="title">Join</h1>
    <hr>
    <div class="columns">
        <div class="column is-6 is-offset-3">
            <div class="box">
                <form method='POST' action='join.php'>
                    <div class="field">
                        <label class="label">Userid</label>
                        <p class="control has-icons-left has-icons-right">
                            <input class="input" type="text" placeholder="Userid" value="" name="user_id">
                            <span class="icon is-small is-left">
                            <i class="fa fa-user"></i>
                            </span>
                        </p>
                    </div> <!--user id-->
                    <div class="field">
                        <label class="label">Userpw</label>
                        <p class="control has-icons-left has-icons-right">
                            <input class="input" type="password" placeholder="Userpw" value="" name="user_pw1">
                            <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                            </span>
                        </p>
                    </div> <!--user pw1-->
                    <div class="field">
                        <label class="label">Userpw check</label>
                        <p class="control has-icons-left has-icons-right">
                            <input class="input" type="password" placeholder="Userpw" value="" name="user_pw2">
                            <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                            </span>
                        </p>
                    </div> <!--user pw2-->
                    <hr>
                    <div class="field is-grouped is-right">
                        <p class="control">
                            <button class="button is-primary" type="submit">Join</button>
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
