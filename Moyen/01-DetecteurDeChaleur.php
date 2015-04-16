<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d %d",
    $W, // width of the building.
    $H // height of the building.
);
fscanf(STDIN, "%d",
    $N // maximum number of turns before game over.
);
fscanf(STDIN, "%d %d",
    $X0,
    $Y0
);

$X = array($X0);
$Y = array($Y0);

// game loop
while (TRUE)
{
    fscanf(STDIN, "%s",
        $BOMB_DIR // the direction of the bombs from batman's current location (U, UR, R, DR, D, DL, L or UL)
    );
    $tabB = str_split($BOMB_DIR, 1);
    
    foreach($tabB as $B){
       switch($B){
            case "U": // La valeur X ne bouge pas et Y doit diminuer
                $H0 = abs($Y0-minmax($Y, $Y0, "d", $H));
                
                $Y0 = $Y0-ceil($H0/2);
                break;
            case "D": // La valeur X ne bouge pas et Y doit augmenter
                $H0 = abs($Y0-minmax($Y, $Y0, "a", $H));
                
                $Y0 = $Y0+ceil($H0/2);
                break;
            case "R": // La valeur X doit augmenter et Y ne bouge pas
                $W0 = abs($X0-minmax($X, $X0, "a", $W));
                
                $X0 = $X0+ceil($W0/2);
                break;
            case "L": // La valeur X doit diminuer et Y ne bouge pas
                $W0 = abs($X0-minmax($X, $X0, "d", $W));
                
                $X0 = $X0-ceil($W0/2);
                break;
        } 
    }
    
    $X[] = $X0;
    $Y[] = $Y0;
    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));

    echo($X0." ".$Y0."\n"); // the location of the next window Batman should jump to.
}

function minmax($tab, $theP, $dir = "d", $Z){
    $tabInf = array();
    $tabSup = array();
    
    if($dir == "d"){
        foreach($tab as $value){
            if($value < $theP){
                $tabInf[] = $value;
            }
        }
        
        if(count($tabInf) > 0){
            return max($tabInf);
        } else {
            return 0;
        }
    } else {
        foreach($tab as $value){
            if($value > $theP){
                $tabSup[] = $value;
            }
        }
        
        if(count($tabSup) > 0){
            return min($tabSup);
        } else {
            return $Z;
        }
    }
}
?>