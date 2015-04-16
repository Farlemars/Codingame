<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $N // the number of points used to draw the surface of Mars.
);

$landX = array();
$landY = array();

for ($i = 0; $i < $N; $i++)
{
    fscanf(STDIN, "%d %d",
        $LAND_X, // X coordinate of a surface point. (0 to 6999)
        $LAND_Y // Y coordinate of a surface point. By linking all the points together in a sequential fashion, you form the surface of Mars.
    );
    $landX[] = $LAND_X;
    $landY[] = $LAND_Y;
}

$Yplat = -1;
for($i=0; $i<count($landY); $i++){
    if($Yplat == $landY[$i]){
        break;
    }
    $Yplat = $landY[$i];
}

// game loop
while (TRUE)
{
    fscanf(STDIN, "%d %d %d %d %d %d %d",
        $X,
        $Y,
        $HS, // the horizontal speed (in m/s), can be negative.
        $VS, // the vertical speed (in m/s), can be negative.
        $F, // the quantity of remaining fuel in liters.
        $R, // the rotation angle in degrees (-90 to 90).
        $P // the thrust power (0 to 4).
    );

    // Write an action using echo(). DON'T FORGET THE TRAILING \n
    // To debug (equivalent to var_dump): error_log(var_export($var, true));
    
    if($Y < $Yplat+2000){
        echo("0 4\n"); // R P. R is the desired rotation angle. P is the desired thrust power.
    } else {
        echo("0 2\n");
    }
}
?>