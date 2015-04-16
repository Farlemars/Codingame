<?php
/**
 * Auto-generated code below aims at helping you parse
 * the standard input according to the problem statement.
 **/

fscanf(STDIN, "%s",
    $LON
);

fscanf(STDIN, "%s",
    $LAT
);

fscanf(STDIN, "%d",
    $N
);

$defibrilateurs = array();
$dist = array();

for ($i = 0; $i < $N; $i++)
{
    $DEFIB = stream_get_line(STDIN, 256, "\n");
    $defibrilateurs[] = explode(";", $DEFIB);
}


foreach($defibrilateurs as $def){
    $x = ((num($def[4])-num($LON))*cos((num($LAT)+num($def[5]))/2));
    $y = (num($def[5])-num($LAT));
    $d = (sqrt(pow($x, 2)+pow($y, 2))) * 6371;
   
    $dist[$def[0]."|".$def[1]] = $d;
}
asort($dist);

// Write an action using echo(). DON'T FORGET THE TRAILING \n
// To debug (equivalent to var_dump): error_log(var_export($var, true));
$ak = array_keys($dist);
$firstKey = explode("|", array_shift($ak));

$theDef = $firstKey[1];

echo($theDef."\n");

function num($texte){
    $texte = str_replace(",", ".", $texte);
    
    return $texte;
}
?>