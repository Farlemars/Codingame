<?php
/**
 * CodinGame planet is being attacked by slimy insectoid aliens.
 **/


// game loop
while (TRUE)
{
    fscanf(STDIN, "%s",
        $enemy1 // name of enemy 1
    );
    fscanf(STDIN, "%d",
        $dist1 // distance to enemy 1
    );
    fscanf(STDIN, "%s",
        $enemy2 // name of enemy 2
    );
    fscanf(STDIN, "%d",
        $dist2 // distance to enemy 2
    );

    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));
    if($dist1 < $dist2){
        echo($enemy1."\n");
    } else {
        echo($enemy2."\n");
    }
}
?>