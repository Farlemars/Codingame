<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

// game loop
while (TRUE)
{
    $montagnes = array();
    
    fscanf(STDIN, "%d %d",
        $SX,
        $SY
    );
    for ($i = 0; $i < 8; $i++)
    {
        fscanf(STDIN, "%d",
            $MH // represents the height of one mountain, from 9 to 0. Mountain heights are provided from left to right.
        );
        $montagnes[] = $MH;
    }
    arsort($montagnes);
    
    $firstKey = array_shift(array_keys($montagnes));
    
    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));
    if($SX == $firstKey){
        echo("FIRE\n");
    } else {
        echo("HOLD\n"); // either:  FIRE (ship is firing its phase cannons) or HOLD (ship is not firing).
    }

    unset($montagnes);
}
?>