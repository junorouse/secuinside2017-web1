<?php

/*
타이틀 읽게 하기
*/

$b = "A;\naa: dump;\nbb: dump;\n";

$a = "Set-Cookie: last_view=".$b."; expires=Mon, 12-Jun-2017 01:06:44 GMT; Max-Age=3600;";

$c = explode("\n", $a);

foreach ($c as $x) {
    header($x);
    var_dump($x);
}

// Set-Cookie: a=b%0A; expires=Mon, 12-Jun-2017 01:06:44 GMT; Max-Age=3600; path=A; domain=F

setcookie("a", "b\n", time()+3600, "A", "F");