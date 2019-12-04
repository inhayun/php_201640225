<?php
include "function11.php"; //함수를 선언한다.
include "function11.php"; // 함수 중복 처리 한다.
list($name, $num) = daelim("대림이", 123456);
// $name <--- $name[0]
// $num <--- $name[1]
//print_r($name);
echo $name. "=" . $num;