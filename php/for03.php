<?php

$files = scandir(".");
//print_r($files);
for($i=0;$i<count($files);$i++) {


    echo "파일명=".$files[$i]."\n";
}
