<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $N // the number of temperatures to analyse
);
$TEMPS = stream_get_line(STDIN, 256, "\n"); // the N temperatures expressed as integers ranging from -273 to 5526

if($N == 0){
    echo("0\n");
} else {
    $tabTemps = explode(" ", $TEMPS);
    $result = array();
    
    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));
    
    $lowestValue = $tabTemps[0];
    for($a=0; $a<count($tabTemps); $a++){
        if(abs($tabTemps[$a]) < abs($lowestValue)){
            $lowestValue = $tabTemps[$a];
        } else if(abs($tabTemps[$a]) == abs($lowestValue)){
            $lowestValue = max($tabTemps[$a], $lowestValue);
        }
    }
    
    echo($lowestValue."\n");
}

?>