<?php



// $array = [1,2,4,7];
$arrayBase = [1,2,4];

$array = $arrayBase;
$direction = "right";
$counter = 0;

while(true){

    if( $direction  == "right" ){
        unset( $array[ count($array)-1 ] );
        $counter ++;
    } elseif ( $direction  == "left" ){
        $array = $arrayBase;
        unset( $array[0] );
        $counter ++;
    }

    $min = min($array);
    $max = max($array);
    
    if ( ($max - $min) % 2 == 0 ){
        echo sizeof($array);
        break;
    } else {
        if ( sizeof($array) < 2){
            break;
        }        
    }

    if( $counter == 2){        
        unset( $array[0] );
    }

    


}

