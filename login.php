<?php
require_once("config.php");

if (isset($_POST['user_id']) && isset($_POST['user_pw'])) {
    $user_id = $_POST['user_id'];
    $user_pw = $_POST['user_pw'];

    if ($user_id != '' && $user_pw != '') {
        // pdo login
        $stmt = $pdo->prepare("SELECT idx, user_id FROM users WHERE user_id=? AND user_pw=?");
        $stmt->execute(array($user_id, $user_pw));
        $rows = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($rows) {
            // set token cookie
            setcookie("token", sha1($user_id.$salt), time()+7200);
            setcookie("user_id", $user_id, time()+7200);
            setcookie("user_idx", $rows['idx'], time()+7200);
            setcookie("last_view_title", 'None', time()+7200);
            alert("Login Success!", "/");
        } else {
            alert("Login Fail!", "/login.php");
        }
    }
}

include("header.php");
?>

<section class="section">
  <div class="container">
    <h1 class="title">Login</h1>
    <hr>
    <div class="columns">
        <div class="column is-6 is-offset-3">
            <div class="box">
                <form method='POST' action='login.php' name='login_frm'>
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
                            <input class="input" type="password" placeholder="Userpw" value="" name="user_pw">
                            <span class="icon is-small is-left">
                            <i class="fa fa-lock"></i>
                            </span>
                        </p>
                    </div> <!--user pw-->
                </form>
                <hr>
                <div class="field is-grouped is-right">
                    <p class="control">
                        <button class="button is-primary" onclick="location.href='join.php'">Join</button>
                    </p>
                    <p class="control">
                        <button class="button is-primary" onclick="login_frm.submit();">Login</button>
                    </p>
                </div>
            </div>
        </div>
    </div>
  </div>
</section>

<?php
include("footer.php");
?>
