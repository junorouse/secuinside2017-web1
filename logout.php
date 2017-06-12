<?php
setcookie("user_idx", "", time()-3600);
setcookie("user_id", "", time()-3600);
setcookie("last_view_title", "", time()-3600);
setcookie("token", "", time()-3600);
echo "<script>document.location.href='/';</script>";