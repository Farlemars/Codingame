<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d %d %d %d",
    $LX, // the X position of the light of power
    $LY, // the Y position of the light of power
    $TX, // Thor's starting X position
    $TY // Thor's starting Y position
);

// game loop
while (TRUE)
{
    fscanf(STDIN, "%d",
        $E // The level of Thor's remaining energy, representing the number of moves he can still make.
    );

    if($LX == $TX){ // Si Thor est sur la meme verticale
        if($LY < $TY){
            echo("N\n");
            $TY++;
        } else {
            echo("S\n");
            $TY--;
        }
    } elseif($LY == $TY) { // Si Thor est sur la meme horizontale
        if($LX < $TX){
            echo("W\n");
            $TX--;
        } else {
            echo("E\n");
            $TX++;
        }
    } elseif($LX < $TX && $LY < $TY){
        echo("NW\n");
        $TX--;
        $TY++;
    } elseif($LX < $TX && $LY > $TY){
        echo("SW\n");
        $TX--;
        $TY++;
    } elseif($LX > $TX && $LY > $TY){
        echo("SE\n");
        $TX++;
        $TY++;
    } elseif($LX > $TX && $LY < $TY){
        echo("NE\n");
        $TX++;
        $TY++;
    }
}
?>