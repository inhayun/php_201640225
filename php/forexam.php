<?php
for($i=0, $k=0; $i<10; $i++, $k+=2) {
    
    if($i<3) {
        continue;
    } else if($i>=9) {
        break;
    }

    echo $k." ";
}