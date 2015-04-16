<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%d",
    $L
);
fscanf(STDIN, "%d",
    $H
);

$result = "";

$T = stream_get_line(STDIN, 256, "\n");
$tabT = str_split($T, 1);


$tab = array();
for ($i = 0; $i < $H; $i++)
{
    $ROW = stream_get_line(STDIN, 1024, "\n");
    $tab[] = str_split($ROW, $L);
}

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));
for ($i = 0; $i < $H; $i++)
{
    for($a=0; $a<count($tabT); $a++){
        $position = ord(strtoupper($tabT[$a]))-64-1;
        if($position < 0){
            $position = 26;
        }
        $result .= $tab[$i][$position];
    }
    $result .= "\n";
}


echo($result);

?>