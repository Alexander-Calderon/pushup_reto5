<?php

function sam_kelly(){
    $samDaily = (int)fgets(STDIN);
    $kellyDaily = (int)fgets(STDIN);
    $difference = (int)fgets(STDIN);

    $samTotal = $difference;
    $kellyTotal = 0;
    $days = 0;
    
    if ( ($samDaily < 1 || $kellyDaily < 1)  || ($samDaily > 100 || $kellyDaily > 100 )  ){
        return -1;    
    }

    if ( $samDaily >= $kellyDaily ){
        return -1;    
    }

    while( $samTotal >= $kellyTotal ){
        $samTotal += $samDaily;
        $kellyTotal += $kellyDaily;
        $days++;
    }
    return $days;
}

echo sam_kelly();

